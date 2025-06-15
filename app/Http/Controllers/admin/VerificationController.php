<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\Verification;
use Illuminate\Http\Request;
use niklasravnsborg\LaravelPdf\Facades\Pdf as FacadesPdf;
use Illuminate\Validation\Rule;

class VerificationController extends Controller
{
    public function index(Request $request)
    {
        $query = Verification::query();

        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('certification_name', 'like', "%$search%")
                  ->orWhere('certification_number', 'like', "%$search%");
        }

        $verifications = $query->paginate(25);
        return view('system.verifications.index', compact('verifications'));
    }

    public function create()
    {
        return view('system.verifications.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'certification_name' => 'required|min:8|max:100',
            'certification_number' => 'required|digits_between:14,15|unique:verifications,certification_number',
            'organization_name' => 'required|min:8|max:100',
            'stander' => 'nullable|integer',
            'initial_date' => 'required|date',
            'issue_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:issue_date',
        ]);

        Verification::create($request->all());

        return redirect()->route('verifications.index')->with('success', 'Certification created successfully.');
    }

    public function destroy($id)
    {
        Verification::findOrFail($id)->delete();
        return back()->with('success', 'Deleted successfully');
    }

    public function edit($id)
    {
        $verification = Verification::findOrFail($id);
        return view('system.verifications.edit', compact('verification'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'certification_name' => 'required|min:8|max:100',
                'certification_number' => [
                'required',
                'digits_between:14,15',
                Rule::unique('verifications')->ignore($id),
                ],
            'organization_name' => 'required|min:8|max:100',
            'stander' => 'nullable|integer',
            'initial_date' => 'required|date',
            'issue_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:issue_date',
        ]);

        $verification = Verification::findOrFail($id);
        $verification->update($request->all());

        return redirect()->route('verifications.index')->with('success', 'Updated successfully.');
    }


    public function downloadPDF($id)
    {
        $verification = Verification::findOrFail($id);

        $pdf = FacadesPdf::loadView('system.verifications.pdf', compact('verification'));
        return $pdf->stream('certification_' . $verification->id . '.pdf');
    }
}

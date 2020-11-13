<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function getCompanies()
    {
        $companies = Company::orderBy('id', 'DESC')->get();
        return view('company.companies')->with('companies', $companies);
    }

    public function addCompany(Request $request)
    {
        Company::create([
            'name' => $request->name,
            'code' => $request->code,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country

        ]);
        return redirect(route('companies.list'));
    }

    public function editCompany($company_id)
    {
        $company = Company::where('id', $company_id)->firstOrFail();
        return view('company.editCompany')->with('company', $company);
    }

    public function updateCompany(Request $request, $company_id)
    {
        Company::where('id', $company_id)->update([
            'name' => $request->name,
            'code' => $request->code,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country

        ]);
        return redirect()->back();
    }

    public function deleteCompany(Request $request)
    {
        Company::where('id', $request->company_id)->delete();
        return redirect()->back();
    }


}

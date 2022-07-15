<?php

namespace App\Http\Controllers;

use App\Exports\PassportDetailExport;
use App\Exports\PassportExport;
use App\Http\Requests\StorePassport;
use App\Http\Requests\UpdatePassport;
use App\Imports\PassportImport;
use App\Models\Passport;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;

class PassportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passports = Passport::where('reject_status', NULL)->paginate(1000);
        if (request('search')) {
            $passports = Passport::where(function ($query) {
                $query->where('name', 'Like', '%' . request('search') . '%');
                $query->orWhere('father_name', 'Like', '%' . request('search') . '%');
                $query->orWhere('nrc', 'Like', '%' . request('search') . '%');
                $query->orWhere('date_of_birth', 'Like', '%' . request('search') . '%');
                $query->orWhere('passport', 'Like', '%' . request('search') . '%');
                $query->orWhere('local_agent_name', 'Like', '%' . request('search') . '%');
                $query->orWhere('address', 'Like', '%' . request('search') . '%');
                $query->orWhere('remark', 'Like', '%' . request('search') . '%');
                $query->orWhere('phone', 'Like', '%' . request('search') . '%');
            })->paginate(1000);
        }

        if (request('from_date') && request('to_date')) {
            $passports = Passport::whereBetween('join_date', [request('from_date'), request('to_date')])->paginate(1000);;
        }

        return view('passport.index', compact('passports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('passport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePassport $request)
    {

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $path = $photo->store('public/photo');
        }

        $Passport = new Passport();
        $Passport->labour_card_no = $request->labour_card_no;
        $Passport->issue_labour_date = $request->issue_labour_date;
        $Passport->name = $request->name;
        $Passport->photo = $path ?? '';
        $Passport->gender = $request->gender;
        $Passport->nrc = $request->nrc;
        $Passport->father_name = $request->father_name;
        $Passport->qualification = $request->qualification;
        $Passport->date_of_birth = $request->date_of_birth;
        $Passport->address = $request->address;
        $Passport->phone = $request->phone;
        $Passport->job = $request->job;
        $Passport->passport = $request->passport;
        $Passport->passport_date = $request->passport_date;
        $Passport->identification_card = $request->identification_card;
        $Passport->issue_date_id_card = $request->issue_date_id_card;
        $Passport->place_of_passport = $request->place_of_passport;
        $Passport->salary = $request->salary;
        $Passport->covid_status = $request->covid_status;
        $Passport->vaccine_name = $request->vaccine_name;
        $Passport->covid_number = $request->covid_number;
        $Passport->contact_person = $request->contact_person;
        $Passport->phone_number = $request->phone_number;
        $Passport->relative = $request->relative;
        $Passport->local_agent_name = $request->local_agent_name;
        $Passport->local_agent_phone = $request->local_agent_phone;
        $Passport->local_agent_email = $request->local_agent_email;
        $Passport->remark = $request->remark;
        $Passport->join_date = date("Y-m-d");
        $Passport->save();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $passport = Passport::findOrFail($id);
        return view('passport.show', compact('passport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $passport = Passport::findOrFail($id);
        return view('passport.edit', compact('passport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePassport $request, $id)
    {
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $path = $photo->store('public/photo');
        }

        $Passport = Passport::findOrFail($id);
        $Passport->labour_card_no = $request->labour_card_no;
        $Passport->issue_labour_date = $request->issue_labour_date;
        $Passport->name = $request->name;
        $Passport->photo = $path ?? $Passport->photo;
        $Passport->gender = $request->gender;
        $Passport->nrc = $request->nrc;
        $Passport->father_name = $request->father_name;
        $Passport->qualification = $request->qualification;
        $Passport->date_of_birth = $request->date_of_birth;
        $Passport->address = $request->address;
        $Passport->phone = $request->phone;
        $Passport->job = $request->job;
        $Passport->passport = $request->passport;
        $Passport->passport_date = $request->passport_date;
        $Passport->identification_card = $request->identification_card;
        $Passport->issue_date_id_card = $request->issue_date_id_card;
        $Passport->place_of_passport = $request->place_of_passport;
        $Passport->salary = $request->salary;
        $Passport->covid_status = $request->covid_status;
        $Passport->vaccine_name = $request->vaccine_name;
        $Passport->covid_number = $request->covid_number;
        $Passport->contact_person = $request->contact_person;
        $Passport->phone_number = $request->phone_number;
        $Passport->relative = $request->relative;
        $Passport->local_agent_name = $request->local_agent_name;
        $Passport->local_agent_phone = $request->local_agent_phone;
        $Passport->local_agent_email = $request->local_agent_email;
        $Passport->remark = $request->remark;
        $Passport->update();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $passport = Passport::findOrFail($id);
        $passport->delete();
        return redirect()->back()->with('success', 'Deleted successfully.');
    }


    /**
     * @return \Illuminate\Support\Collection
     */
    public function passport_import()
    {
        Excel::import(new PassportImport, request()->file('file'));
        return redirect()->back()->with('success', 'Created successfully.');
    }



    /**
     * @return \Illuminate\Support\Collection
     */
    public function passport_export()
    {
        $passports = Passport::all();
        return Excel::download(new PassportExport($passports), 'passport_' . date("Y-m-d H:i:s") . '.xlsx');
    }


    public function passport_detail_export($id)
    {
        $passport = Passport::findOrFail($id);
        return Excel::download(new PassportDetailExport($passport), 'passport_' . date("Y-m-d H:i:s") . '.xlsx');
    }
}

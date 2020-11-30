<?php

namespace App\Http\Controllers\Fe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\QuestionnaireModel;
use App\Model\QuestionnaireCustomerModel;

class ServiceqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (empty(auth()->user()->id)) {
            return redirect(route('login'));
        }else{        
            $data['questionaire'] = QuestionnaireModel::all();
            return view('fe.serviceq.index', $data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {            

        $count = count($request->questionnaire_id);        
        for ($i=0; $i < $count; $i++) { 
            $insert = new QuestionnaireCustomerModel();
            $insert->user_id = auth()->user()->id;
            $insert->questionnaire_id = $request->questionnaire_id[$i];                     
            $insert->score_hope = $request->score_hope[$i];
            $insert->score_actual = $request->score_actual[$i];
            $insert->created_by =  auth()->user()->email;
            $insert->created_at =  date("Y-m-d H:i:s");            
            $insert->save();            
        }

        return redirect(route('index'))->with('message', 'Questionnaire success Added !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

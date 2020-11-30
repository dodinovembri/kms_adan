<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\QuestionnaireModel;

class QuestionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['questionnaire'] = QuestionnaireModel::all();
        return view('admin.questionnaire.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.questionnaire.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $questionnaire = new QuestionnaireModel();            
        $questionnaire->questions = $request->input('questions');      
        $questionnaire->created_by =  auth()->user()->email;
        $questionnaire->created_at =  date("Y-m-d H:i:s"); 
        $questionnaire->save();

        return redirect(route('admin.questionnaire.index'))->with('message', 'Questionnaire success Added !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['questionnaire'] = QuestionnaireModel::find($id);
        return view('admin.questionnaire.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['questionnaire'] = QuestionnaireModel::find($id);
        return view('admin.questionnaire.edit', $data);  
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
        $questionnaire = QuestionnaireModel::find($id);            
        $questionnaire->questions = $request->input('questions');      
        $questionnaire->updated_by =  auth()->user()->email;
        $questionnaire->updated_at =  date("Y-m-d H:i:s"); 
        $questionnaire->update(); 
        

        return redirect(route('admin.questionnaire.index'))->with('message', 'Questionnaire success Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find = QuestionnaireModel::find($id)->delete();
        return redirect(route('admin.questionnaire.index'))->with('message', 'Questionnaire success Deleted !');
    }
}

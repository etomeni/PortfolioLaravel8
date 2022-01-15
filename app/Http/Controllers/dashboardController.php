<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\profile;
use App\Models\projects;
use App\Models\skills;

class dashboardController extends Controller
{
    public function index(Request $request) {
        return view('dashboard.index');
    }

    public function home() {
        return view('dashboard.home');
    }

    public function homeAuth(Request $request) {

        $editSection = $request->hiddenInput;

        switch ($editSection) {
            case 'headerIntro':
                $validator = Validator::make($request->all(), [
                    'itext' => 'required|min:3',
                    'name' => 'required|min:5',
                    'propic' => '', // File Type for Profile Picture
                    'description' => 'required|min:5',
                ]);
                        
                if ($validator->fails()) {
                    return response()->json([
                        'status' => 400,
                        'errors' => $validator->getMessageBag(),
                    ]);

                } else {
                    // $contact = new profile();
                    // $contact->itext =$request->itext;
                    // $contact->name =$request->name;
                    // $contact->description =$request->description;
                    // $contact->skillOverview =$request->skillOverview;
                    // $contact->skills =$request->skills;
                    // $contact->save();

                    return response()->json([
                        'status' => 200,
                        // 'message' => $validator->getMessageBag(),
                        'message' => "changes saved sucessfully!"
                    ]);

                }

                
                break;
            
            case 'SkillOverview':
                # code...
                break;
            
            case 'SubmitNewSkill':
                # code...
                break;
            
            case 'selectFeaPro':
                # code...
                break;
            
            case 'editFeaPro':
                # code...
                break;
            
            default:
                # code...
                break;
        }
       
        
    }

    public function new_project(Request $request) {
        return view('dashboard.new_project');
    }
    
}

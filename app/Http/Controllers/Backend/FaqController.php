<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use DB;
use App\Models\Question_description;
class FaqController extends Controller
{
    //
    public function index(){
		$faq=Faq::all();
       //    $Question_description= Question_description::all();
		return view('Admin.faq.index',compact('faq'));
	
}

public function create(){
		
	return view('Admin.faq.add');
	
}
public function store(Request $request)
{
    // Validate the incoming request
   //  $request->validate([
   //      'q1.*' => 'required',
   //      'ar_q1.*' => 'required', // Add validation for Arabic questions
   //      'qesc1.*' => 'required',
   //      'ar_qesc1.*' => 'required', // Add validation for Arabic question descriptions
   //  ]);

    // Create a new FAQ instance
  //  $faq = new Faq();
    // Save the common fields for both English and Arabic questions here if needed
    
    // Save English questions and descriptions
    $englishQuestions = $request->q1;
    $englishQuestionDescriptions = $request->qesc1;
    $arabicQuestions = $request->question_ar;
    //return  $arabicQuestions;
    $arabicQuestionDescriptions = $request->question_description_ar;
    //$englishData = [];
//     foreach ($englishQuestions as $index => $questions) {
//       foreach ($arabicQuestions as $index => $question) {
//       $faq->create([
//             'question' => $questions,
//             'question_description' => $englishQuestionDescriptions[$index],
//             // Add any other fields if needed
//             'question_ar' => $question,
//             'question_description_ar' => $arabicQuestionDescriptions[$index],
//         ]);
       
//     }
//    }
foreach ($englishQuestions as $index => $englishQuestion) {
    // Create a new FAQ instance for each pair of questions
    $faq = new Faq();
    $faq->question = $englishQuestion;
    $faq->question_description = $englishQuestionDescriptions[$index];
    $faq->question_ar = $arabicQuestions[$index];
    $faq->question_description_ar = $arabicQuestionDescriptions[$index];
    $faq->save();
}

    //$faq ->save();
    // Save Arabic questions and descriptions
    
    //$arabicData = [];
   //  foreach ($arabicQuestions as $index => $question) {
   //    $faq->create([
   //          'question_ar' => $question,
   //          'question_description_ar' => $arabicQuestionDescriptions[$index],
   //          // Add any other fields if needed
   //      ]);
   //     // return $arabicData;
   //  }
    //$faq ->save();
    // Associate both English and Arabic questions with the FAQ entry
   //  $faq->createMany($englishData);
   //  $faq->createMany($arabicData);

    // Redirect the user after storing the data
    return redirect('admin/faq');
}


	public function edit($id)
	{
//         $faq=DB::table('faqs')
//   ->join('question_descriptions','question_descriptions.faq_id','=','faqs.id')     
// ->select('faqs.id as faq','faqs.label','faqs.title','faqs.description','question_descriptions.question','question_descriptions.question_description','question_descriptions.id as questionid')
//    ->where('faqs.id','=',$id)
   //->orderBy('id','DESC')
//    ->get();

//print_r($faq);
 //  return 'hgh';
 $Question_description= Faq::findOrFail($id);;
		//$faq=Faq::findOrFail($id);
	//	return $Question_description;
		return view('Admin.faq.edit',compact('Question_description'));
	}

	public function update(Request $request){
		$res = Faq::find($request->id);
        //return $res;
        if ($request->has('q1')) {
            $res->question = $request->input('q1');
          //  return $res->question;
        }
        if ($request->has('qesc1')) {
            $res->question_description = $request->input('qesc1');
        }
        if ($request->has('q_ar')) {
            $res->question_ar = $request->input('q_ar');
        }
        if ($request->has('qesc_ar')) {
            $res->question_description_ar = $request->input('qesc_ar');
        }
 
        $res->save();
      // } 
  


      

  //return ;
     // return  $question_descriptions;
		return redirect('admin/faq');
		}
	public function delete($id)
	{
      Faq::findOrFail($id)->delete();
        

//  $role_id= Question_description::where('id',$id);
//                                        $role_id->delete();
        //Question_description::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
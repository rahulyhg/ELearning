<?php

namespace App\Http\Controllers;
use \App;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subject;
use App\QuizResult;
use Yajra\Datatables\Datatables;
use DB;
use Input;
use Excel;
use Exception;
class SubjectsController extends Controller
{
    public $excel_data = array();   
    public function __construct()
    {
    	$this->middleware('auth');
    }

    /**
     * Course listing method
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
      if(!checkRole(getUserGrade(2)))
      {
        prepareBlockUserMessage();
        return back();
      }
        $data['active_class']       = 'exams';
<<<<<<< HEAD
        $data['title']              = __('messages.subjects_list');
=======
        $data['title']              = getPhrase('subjects_list');
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
    	// return view('mastersettings.subjects.list', $data);

          $view_name = getTheme().'::mastersettings.subjects.list';
        return view($view_name, $data);
    }

    /**
     * This method returns the datatables data to view
     * @return [type] [description]
     */
    public function getDatatable()
    {
      if(!checkRole(getUserGrade(2)))
      {
        prepareBlockUserMessage();
        return back();
      }

        

         $records = Subject::select([
         	'id','subject_title', 'subject_code','maximum_marks', 'pass_marks', 'is_lab', 'is_elective_type', 'slug', 'updated_at'])
         ->orderBy('updated_at','desc');
        
        return Datatables::of($records)
        ->addColumn('action', function ($records) {
         

            $link_data = '<div class="dropdown more">
                        <a id="dLabel" type="button" class="more-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
<<<<<<< HEAD
                            <li><a href="'.URL_SUBJECTS_EDIT.'/'.$records->slug.'"><i class="fa fa-pencil"></i>'.__("messages.edit").'</a></li>';
                            $temp = '';
                            if(checkRole(getUserGrade(1))) {
                                $temp .= '<li><a href="javascript:void(0);" onclick="deleteRecord(\''.$records->slug.'\');"><i class="fa fa-trash"></i>'. __("messages.delete").'</a></li>';
=======
                            <li><a href="'.URL_SUBJECTS_EDIT.'/'.$records->slug.'"><i class="fa fa-pencil"></i>'.getPhrase("edit").'</a></li>';
                            $temp = '';
                            if(checkRole(getUserGrade(1))) {
                                $temp .= '<li><a href="javascript:void(0);" onclick="deleteRecord(\''.$records->slug.'\');"><i class="fa fa-trash"></i>'. getPhrase("delete").'</a></li>';
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
                            }

                            $temp .='</ul> </div>';
                            $link_data .= $temp;
                    return $link_data;
            })
        ->removeColumn('slug')
        ->removeColumn('is_elective_type')
        ->removeColumn('is_lab')
        ->removeColumn('pass_marks')
        ->removeColumn('maximum_marks')
        ->removeColumn('updated_at')
        ->make();
    }

    /**
     * This method loads the create view
     * @return void
     */
    public function create()
    {
      if(!checkRole(getUserGrade(2)))
      {
        prepareBlockUserMessage();
        return back();
      }
    	$data['record']         	= FALSE;
    	$data['active_class']       = 'exams';
<<<<<<< HEAD
    	$data['title']              = __('messages.add_subject');
=======
    	$data['title']              = getPhrase('add_subject');
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
    	// return view('mastersettings.subjects.add-edit', $data);

         $view_name = getTheme().'::mastersettings.subjects.add-edit';
        return view($view_name, $data);
    }

    /**
     * This method loads the edit view based on unique slug provided by user
     * @param  [string] $slug [unique slug of the record]
     * @return [view with record]       
     */
    public function edit($slug)
    {
      if(!checkRole(getUserGrade(2)))
      {
        prepareBlockUserMessage();
        return back();
      }
    	$record = Subject::where('slug', $slug)->first();
      $data['record']       		= $record;
    	$data['active_class']       = 'exams';
<<<<<<< HEAD
      $data['title']              = __('messages.edit_subject');
=======
      $data['title']              = getPhrase('edit_subject');
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
    	// return view('mastersettings.subjects.add-edit', $data);


         $view_name = getTheme().'::mastersettings.subjects.add-edit';
        return view($view_name, $data);
    }

    /**
     * Update record based on slug and reuqest
     * @param  Request $request [Request Object]
     * @param  [type]  $slug    [Unique Slug]
     * @return void
     */
    public function update(Request $request, $slug)
    {
      if(!checkRole(getUserGrade(2)))
      {
        prepareBlockUserMessage();
        return back();
      }
        $record                 = Subject::where('slug', $slug)->get()->first();
        
          $this->validate($request, [
       	 'subject_title'          => 'bail|required|max:40',
         'subject_code'           => 'bail|required|max:20|unique:subjects,subject_code,'.$record->id
        
         ]);
        DB::beginTransaction();
            try{

        $name 					        = $request->subject_title;
       
       /**
        * Check if the title of the record is changed, 
        * if changed update the slug value based on the new title
        */
        if($name != $record->subject_title)
            $record->slug = $record->makeSlug($name, TRUE);
        $record->subject_title 			= $name;
        $record->slug 			        = $record->makeSlug($name);
        $record->subject_code			= $request->subject_code;
        $record->maximum_marks			= 0;
        $record->pass_marks				= 0;
        $record->is_lab					= 0;
        $record->is_elective_type 		= 0;
        $record->save();

<<<<<<< HEAD
    	flash(__('messages.success'),__('messages.record_updated_successfully'), __('messages.success'));
=======
    	flash('success','record_updated_successfully', 'success');
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

       DB::commit();
         
      }
     catch(Exception $e)
     {

      DB::rollBack();
       if(getSetting('show_foreign_key_constraint','module'))
       {

<<<<<<< HEAD
          flash(__('messages.oops...!'),$e->errorInfo, __('messages.error'));
       }
       else {
          flash(__('messages.oops...!'),__('messages.improper_data_in_the_question'), __('messages.error'));
=======
          flash('oops...!',$e->errorInfo, 'error');
       }
       else {
          flash('oops...!','improper_data_in_the_question', 'error');
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
       }
     }

    	return redirect(URL_SUBJECTS);
    }

    /**
     * This method adds record to DB
     * @param  Request $request [Request Object]
     * @return void
     */
    public function store(Request $request)
    {
      if(!checkRole(getUserGrade(2)))
      {
        prepareBlockUserMessage();
        return back();
      }

       $this->validate($request, [
         'subject_title'          => 'bail|required|max:40',
         'subject_code'           => 'bail|required|max:20|unique:subjects,subject_code',
         
            ]);

         DB::beginTransaction();
      try{

    	$record = new Subject();
        $name 					        = $request->subject_title;
        $record->subject_title 			= $name;
        $record->slug 			        = $record->makeSlug($name, TRUE);
        $record->subject_code			= $request->subject_code;
        $record->maximum_marks			= 0;
        $record->pass_marks				= 0;
        $record->is_lab					  = 0;
        $record->is_elective_type 		= 0;
        $record->save();
       DB::commit();
<<<<<<< HEAD
         flash(__('messages.success'),__('messages.record_added_successfully'), __('messages.success'));
=======
         flash('success','record_added_successfully', 'success');
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
      }
     catch(Exception $e)
     {

      DB::rollBack();
       if(getSetting('show_foreign_key_constraint','module'))
       {

          flash('oops...!',$e->errorInfo, 'error');
       }
       else {
          flash('oops...!','improper_data_in_the_question', 'error');
       }
     }

      
    	return redirect(URL_SUBJECTS);
    }
 
    
    /**
     * Delete Record based on the provided slug
     * @param  [string] $slug [unique slug]
     * @return Boolean 
     */
    public function delete($slug)
    {

      if(!checkRole(getUserGrade(2)))
      {
        prepareBlockUserMessage();
        return back();
      }
        $record = Subject::where('slug', $slug)->first();
        /**
         * Check if any topic exists in this subject
         * If topics are available, dont delete this subject
         */
       try {
          if(!env('DEMO_MODE')) {
             
             $result_ids  = []; 
             $quiz_results   = QuizResult::get();
             if(count($quiz_results)){
               foreach ($quiz_results as $quiz_result) {
                $subject_analysis    = (array)json_decode($quiz_result->subject_analysis);
                
                 foreach ($subject_analysis as $key => $value) {
                   if($key == $record->id){
                      $result_ids[]  = $quiz_result->id;
                    }
                 }
               }
            }

             if(count($result_ids)){
               foreach ($result_ids as $id) {
                 $delete_record   = QuizResult::where('id','=',$id)->first();
                 $delete_record->delete();
               }
            }

           $record->delete();
          }
            $response['status'] = 1;
<<<<<<< HEAD
            $response['message'] = __('messages.record_deleted_successfully');
=======
            $response['message'] = getPhrase('record_deleted_successfully');
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
            }

        catch ( \Illuminate\Database\QueryException $e) {
                 $response['status'] = 0;
           if(getSetting('show_foreign_key_constraint','module'))
            $response['message'] =  $e->errorInfo;
           else
<<<<<<< HEAD
            $response['message'] =  __('messages.this_record_is_in_use_in_other_modules');
=======
            $response['message'] =  getPhrase('this_record_is_in_use_in_other_modules');
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
       }
            
            return json_encode($response);
        
    }

    /**
    * Display a Import Users page
    *
    * @return Response
    */
     public function import()
     {
        if(!checkRole(getUserGrade(2)))
        {
          prepareBlockUserMessage();
          return back();
        }
      
        $data['records']      = FALSE;
        $data['active_class'] = 'exams';
<<<<<<< HEAD
        $data['heading']      = __('messages.subjects');
        $data['title']        = __('messages.import_subjects');
=======
        $data['heading']      = getPhrase('subjects');
        $data['title']        = getPhrase('import_subjects');
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
        $data['layout']        = getLayout();
        // return view('mastersettings.subjects.import.import', $data);

            $view_name = getTheme().'::mastersettings.subjects.import.import';
        return view($view_name, $data);
     }

     public function readExcel(Request $request)
     {
      $rules = [
         'excel'               => 'bail|required' ,
            ];
        $this->validate($request, $rules);
       if(!checkRole(getUserGrade(2)))
        {
          prepareBlockUserMessage();
          return back();
        }
       $success_list = [];
       $failed_list = [];
        try{

        if(Input::hasFile('excel')){
          $path = Input::file('excel')->getRealPath();
          $data = Excel::load($path, function($reader) {
          })->get();
           
          $excel_record = array();
          $final_records =array();
          $isHavingDuplicate = 0;
          if(!empty($data) && $data->count()){
            foreach ($data as $key => $value) {
              foreach($value as $record)
              {
                unset($excel_record);
                 $excel_record['subject_title'] = $record->subject_title;
                $excel_record['subject_code'] = $record->subject_code;
                 $failed_length = count($failed_list);
                $excel_record = (object)$excel_record;

                if(!$record->subject_title || !$record->subject_code){
                    $temp = array();
                 $temp['record']    = $excel_record;
<<<<<<< HEAD
                 $temp['type']      = __('messages.title_or_code_cannot_be_null');
=======
                 $temp['type']      = getPhrase('title_or_code_cannot_be_null');
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
                 $failed_list[$failed_length] = (object)$temp;
                 continue;
                }
               
                if($this->isRecordExists($record->subject_title, 'subject_title'))
                {

                  
                 $temp = array();
                 $temp['record']    = $excel_record;
<<<<<<< HEAD
                 $temp['type']      = __('messages.record_already_exists_with_this_title');
=======
                 $temp['type']      = getPhrase('record_already_exists_with_this_title');
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
                 $failed_list[$failed_length] = (object)$temp;
                  continue;
                }

                if($this->isRecordExists($record->subject_code, 'subject_code'))
                {
                  $isHavingDuplicate = 1;
                  $temp = array();
                 $temp['record'] = $excel_record;
                 $temp['type'] ='Record already exists with this code';
                 $failed_list[$failed_length] = (object)$temp;
                  continue;
                }
               
                $final_records[] = $excel_record;

               
              }
              
            }
            
              if($this->pushToDb($final_records))
                  $success_list = $final_records;
         
          }
        }
       
       
       $data['failed_list']   =   $failed_list;
       $data['success_list']  =    $success_list;
         $this->excel_data['failed'] = $failed_list;
       $this->excel_data['success'] = $success_list;
        flash('success','record_added_successfully', 'success');
        
       $this->downloadExcel();

        }
     catch( Exception $e)
     {
       if(getSetting('show_foreign_key_constraint','module'))
       {

          flash('oops...!',$e->getMessage(), 'error');
       }
       else {
          flash('oops...!','improper_sheet_uploaded', 'error');
       }
       return back();
     }

        // URL_USERS_IMPORT_REPORT
       $data['failed_list']   =   $failed_list;
       $data['success_list']  =    $success_list;
       $data['records']      = FALSE;
       $data['layout']       = getLayout();
       $data['active_class'] = 'exams';
<<<<<<< HEAD
       $data['heading']      = __('messages.users');
       $data['title']        = __('messages.report');
=======
       $data['heading']      = getPhrase('users');
       $data['title']        = getPhrase('report');
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
      // flash('success','record_added_successfully', 'success');
       // return view('mastersettings.subjects.import.import-result', $data);

         $view_name = getTheme().'::mastersettings.subjects.import.import-result';
        return view($view_name, $data);
 
     }

public function getFailedData()
{
  return $this->excel_data;
}

public function downloadExcel()
{
    Excel::create('subjects_report', function($excel) {
      $excel->sheet('Failed', function($sheet) {
      $sheet->row(1, array('Reason','subject_title', 'subject_code'));
      $data = $this->getFailedData();
      $cnt = 2;
      foreach ($data['failed'] as $data_item) {
        $item = $data_item->record;
        $sheet->appendRow($cnt++, array($data_item->type, $item->subject_title, $item->subject_code));
      }
    });

    $excel->sheet('Success', function($sheet) {
      $sheet->row(1, array('subject_title', 'subject_code'));
      $data = $this->getFailedData();
      $cnt = 2;
      foreach ($data['success'] as $data_item) {
        $item = $data_item;
       $sheet->appendRow($cnt++, array($item->subject_title, $item->subject_code));
      }

    });

    })->download('xlsx');
}


     /**
      * This method verifies if the record exists with the title or code
      * If Exists it returns true else it returns false
      * @param  [type]  $value [description]
      * @param  string  $type  [description]
      * @return boolean        [description]
      */
     public function isRecordExists($record_value, $type='code')
     {
        return Subject::where($type,'=',$record_value)->get()->count();
     }

     /**
      * This method inserts the array of records to db
      * @param  [type] $records [description]
      * @return [type]          [description]
      */
     public function pushToDb($records)
     {
      foreach($records as $request) {
        $subject                = new Subject();
        $name                   = $request->subject_title;
        $subject->subject_title = $name;
        $subject->subject_code  = $request->subject_code;
        $subject->slug          = $subject->makeSlug($name, TRUE);
        $subject->maximum_marks = 0;
        $subject->pass_marks = 0;
        $subject->save();
      }
       return TRUE;
     }

 	
}

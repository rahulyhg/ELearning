<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App;
use Auth;
use App\User;

use SMS;
use DB;
use Artisan;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Session;
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

// use Illuminate\Support\Facades\App;

class DashboardController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
 
        $data['active_class']   = 'dashboard';
        /**
         * Check the role of user
         * Redirect the user as per the eligiblity
         */
      
        $user = getUserRecord();
        $data['layout']         = getLayout();
<<<<<<< HEAD
        $data['title']          =  __('messages.dashboard');
=======
        $data['title']          = getPhrase('dashboard');
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
        $role = getRole();
        if($role=='admin' || $role=='owner'){
           
              Artisan::call('view:clear');
             
             $roles = App\Role::get()->pluck('id');
             $dataset = [];
             $labels = [];
             $bgcolor = [];
             $border_color = [];
             foreach($roles as $key => $value)
             {
                $color_number = rand(0,999);
                $labels[] = ucfirst(getRoleData($value));
                $dataset[] = App\User::where('role_id', '=', $value)->get()->count();
                $bgcolor[] = getColor('',$color_number);
                $border_color[] = getColor('background',$color_number);
             }

            
            $dataset_label[] = 'lbl';
           
            $chart_data['type'] = 'pie'; 
            //horizontalBar, bar, polarArea, line, doughnut, pie
            $chart_data['data']   = (object) array(
                    'labels'            => $labels,
                    'dataset'           => $dataset,
                    'dataset_label'     => $dataset_label,
                    'bgcolor'           => $bgcolor,
                    'border_color'      => $border_color
                    );
                
           $data['chart_data'][] = (object)$chart_data;
<<<<<<< HEAD
           $data['chart_heading']         = __('messages.user_statistics');
=======
           $data['chart_heading']         = getPhrase('user_statistics');
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
           
           $data['payments_chart_data'] = (object)$this->getPaymentStats();
           $data['payments_monthly_data'] = (object)$this->getPaymentMonthlyStats();
           $data['demanding_quizzes'] = (object)$this->getDemandingQuizzes();
           $data['demanding_paid_quizzes'] = (object)$this->getDemandingQuizzes('paid');
       
        $data['layout']        = getLayout();
   
      //   $data['right_bar']          = FALSE;
   
      // $data['right_bar_path']     = 'common.right-bar-chart';
      $data['right_bar_data']     = array('chart_data' => $data['chart_data'] );
           $data['ids'] = array('myChart0' );  

           // return view('admin.dashboard', $data);

<<<<<<< HEAD
=======
            if (Session::has('locale')) {
                App::setLocale(Session::get('locale'));
            }
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
            $view_name = getTheme().'::admin.dashboard';
            
            return view($view_name, $data);
        }
         else if($role == 'parent')
        {
 
           $user                   = getUserWithSlug();
           $data['user']           = $user;
           $data['latest_quizzes'] = $this->getLatestQuizzes();
           $data['latest_series'] = $this->getLatestLmsSeries();

           // return view('parent.dashboard', $data);
<<<<<<< HEAD
=======

            if (Session::has('locale')) {
                App::setLocale(Session::get('locale'));
            }
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
           $view_name = getTheme().'::parent.dashboard';
            return view($view_name, $data);
        }
        else if($role == 'student' )
        {
 
            $user = Auth::user();
            //Overall performance Report
            $resultObject = new App\QuizResult();
            $records = $resultObject->getOverallSubjectsReport($user);
            $color_correct          = getColor('background', rand(0,999));
            $color_wrong            = getColor('background', rand(0,999));
            $color_not_attempted    = getColor('background', rand(0,999)); 
            $correct_answers        = 0;
            $wrong_answers          = 0;
            $not_answered           = 0;

            foreach($records as $record) {
                $record = (object)$record;
                $correct_answers    += $record->correct_answers;
                $wrong_answers      += $record->wrong_answers;
                $not_answered       += $record->not_answered;

           } 

<<<<<<< HEAD
            $labels = [__('messages.correct.'), __('messages.wrong'), __('messages.not_answered')];
=======
            $labels = [getPhrase('correct'), getPhrase('wrong'), getPhrase('not_answered')];
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
            $dataset = [$correct_answers, $wrong_answers, $not_answered];
            $dataset_label[] = 'lbl';
            $bgcolor  = [$color_correct,$color_wrong,$color_not_attempted];
            $border_color = [$color_correct,$color_wrong,$color_not_attempted];
            $chart_data['type'] = 'pie'; 
            //horizontalBar, bar, polarArea, line, doughnut, pie
<<<<<<< HEAD
            $chart_data['title'] = __('messages.overall_performance');  
=======
            $chart_data['title'] = getphrase('overall_performance');  
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

            $chart_data['data']   = (object) array(
                    'labels'            => $labels,
                    'dataset'           => $dataset,
                    'dataset_label'     => $dataset_label,
                    'bgcolor'           => $bgcolor,
                    'border_color'      => $border_color
                    );
                
            $data['chart_data'][] = (object)$chart_data;
            
            //Best scores in each quizzes
            $records = $resultObject->getOverallQuizPerformance($user);
            $labels = [];
            $dataset = [];
            $bgcolor = [];
            $bordercolor = [];
            
            foreach($records as $record) {
                $color_number = rand(0,999);
                $record = (object)$record;
                $labels[] = $record->title;
                $dataset[] = $record->percentage;
                $bgcolor[] = getColor('background',$color_number);
                $bordercolor[] = getColor('border', $color_number);
           } 

            $labels = $labels;
            $dataset = $dataset;
<<<<<<< HEAD
            $dataset_label = __('messages.performance');
=======
            $dataset_label = getPhrase('performance');
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
            $bgcolor  = $bgcolor;
            $border_color = $bordercolor;
            $chart_data['type'] = 'bar'; 
            //horizontalBar, bar, polarArea, line, doughnut, pie
<<<<<<< HEAD
            $chart_data['title'] = __('messages.best_performance_in_all_quizzes');
=======
            $chart_data['title'] = getPhrase('best_performance_in_all_quizzes');
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

            $chart_data['data']   = (object) array(
                    'labels'            => $labels,
                    'dataset'           => $dataset,
                    'dataset_label'     => $dataset_label,
                    'bgcolor'           => $bgcolor,
                    'border_color'      => $border_color
                    );
                
            $data['chart_data'][] = (object)$chart_data;



<<<<<<< HEAD
           // return view('student.dashboard', $data);   
=======
           // return view('student.dashboard', $data);
            //
            if (Session::has('locale')) {
                App::setLocale(Session::get('locale'));
            }
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
            $view_name = getTheme().'::student.dashboard';
            return view($view_name, $data);         
        }
         
    }

     public function getLatestQuizzes()
    {
        $user = Auth::user();
        $interested_categories      = null;
        if($user->settings)
        {
          $interested_categories =  json_decode($user->settings)->user_preferences;
        }
        $quizzes = [];

        if($interested_categories) {
        if(count($interested_categories->quiz_categories))

        $quizzes         = App\Quiz::whereIn('category_id',
                                          (array) $interested_categories->quiz_categories)
      ->where('start_date','<=', date('Y-m-d'))
      ->where('end_date','>=', date('Y-m-d'))
                                ->orderBy('created_at','desc')
                                ->limit(5)
                                ->get();
        }
        else {
          $quizzes         = App\Quiz::orderBy('created_at','desc')
                                ->limit(5)
                                ->get();
        }

        return $quizzes;
    }

      public function getLatestLmsSeries()
    {
        $user = Auth::user();
        $interested_categories      = null;
        if($user->settings)
        {
          $interested_categories =  json_decode($user->settings)->user_preferences;
        }
        $series = [];

        if($interested_categories) {
        if(count($interested_categories->lms_categories))

        $series         = App\LmsSeries::whereIn('lms_category_id',
                                          (array) $interested_categories->lms_categories)
                                ->orderBy('created_at','desc')
                                ->limit(5)
                                ->get();
        }
        else {
          $series         = App\LmsSeries::orderBy('created_at','desc')
                                ->limit(5)
                                ->get();
        }

        return $series;
    }

    public function getPaymentStats()
    {
        $paymentObject = new App\Payment();
            $payment_data = (object)$paymentObject->getSuccessFailedCount();
            

            $payment_dataset = [$payment_data->success_count, $payment_data->cancelled_count, $payment_data->pending_count];
<<<<<<< HEAD
            $payment_labels = [__('messages.success'), __('messages.cancelled'), __('messages.pending')];
            $payment_dataset_labels = [__('messages.total')];
=======
            $payment_labels = [getPhrase('success'), getPhrase('cancelled'), getPhrase('pending')];
            $payment_dataset_labels = [getPhrase('total')];
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

            $payment_bgcolor = [getColor('',4),getColor('',9),getColor('',18)];
            $payment_border_color = [getColor('background',4),getColor('background',9),getColor('background',18)]; 

          $payments_stats['data']    = (object) array(
                                        'labels'            => $payment_labels,
                                        'dataset'           => $payment_dataset,
                                        'dataset_label'     => $payment_dataset_labels,
                                        'bgcolor'           => $payment_bgcolor,
                                        'border_color'      => $payment_border_color
                                        );
           $payments_stats['type'] = 'bar'; 
<<<<<<< HEAD
             $payments_stats['title'] = __('messages.overall_statistics');
=======
             $payments_stats['title'] = getPhrase('overall_statistics');
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

           return $payments_stats;
    }
    /**
     * This method returns the overall monthly summary of the payments made with status success
     * @return [type] [description]
     */
    public function getPaymentMonthlyStats()
    {

          $paymentObject = new App\Payment();
            $payment_data = (object)$paymentObject->getSuccessMonthlyData();
            

            $payment_dataset = [];
            $payment_labels = [];
<<<<<<< HEAD
            $payment_dataset_labels = [__('messages.total')];
=======
            $payment_dataset_labels = [getPhrase('total')];
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
            $payment_bgcolor = [];
            $payment_border_color = []; 


            foreach($payment_data as $record)
            {
              $color_number = rand(0,999);;
              $payment_dataset[] = $record->total;
              $payment_labels[]  = $record->month;
              $payment_bgcolor[] = getColor('',$color_number);
              $payment_border_color[] = getColor('background', $color_number);

            }

          $payments_stats['data']    = (object) array(
                                        'labels'            => $payment_labels,
                                        'dataset'           => $payment_dataset,
                                        'dataset_label'     => $payment_dataset_labels,
                                        'bgcolor'           => $payment_bgcolor,
                                        'border_color'      => $payment_border_color
                                        );
           $payments_stats['type'] = 'line'; 
<<<<<<< HEAD
           $payments_stats['title'] = __('messages.payments_reports_in').' '.getCurrencyCode(); 
=======
           $payments_stats['title'] = getPhrase('payments_reports_in').' '.getCurrencyCode(); 
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

           return $payments_stats;
    }

    public function getDemandingQuizzes($type='')
    {
      $quizResultObject = new App\QuizResult();
      $usage = $quizResultObject->getQuizzesUsage($type);

        $summary_dataset = [];
            $summary_labels = [];
<<<<<<< HEAD
            $summary_dataset_labels = [__('messages.total')];
=======
            $summary_dataset_labels = [getPhrase('total')];
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
            $summary_bgcolor = [];
            $summary_border_color = []; 


            foreach($usage as $record)
            {
              $color_number = rand(0,999);;
              $summary_dataset[] = $record->total;
              $summary_labels[]  = $record->quiz_title;
              $summary_bgcolor[] = getColor('',$color_number);
              $summary_border_color[] = getColor('background', $color_number);

            }

          $quiz_stats['data']    = (object) array(
                                        'labels'            => $summary_labels,
                                        'dataset'           => $summary_dataset,
                                        'dataset_label'     => $summary_dataset_labels,
                                        'bgcolor'           => $summary_bgcolor,
                                        'border_color'      => $summary_border_color
                                        );
           $quiz_stats['type'] = 'doughnut'; 
<<<<<<< HEAD
           $quiz_stats['title'] = __('messages.demanding_quizzes'); 
           if($type!='')
           $quiz_stats['title'] = __('messages.demanding').' '.$type.' '.__('messages.quizzes'); 
=======
           $quiz_stats['title'] = getPhrase('demanding_quizzes'); 
           if($type!='')
           $quiz_stats['title'] = getPhrase('demanding').' '.$type.' '.getPhrase('quizzes'); 
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

           return $quiz_stats;
    }

    public function testLanguage($value='')
    { 

      dd( $language_phrases = (array) session('language_phrases'));
      
      $tr = new TranslateClient(); // Default is from 'auto' to 'en'
      $tr->setSource('en'); // Translate from English
      $tr->setTarget('te'); // Translate to Georgian
      echo $tr->translate('Hello World');
       

     //  $url = urlencode("https://www.googleapis.com/language/translate/v2?q=Select Role&target=hi&source=en&key=AIzaSyAhYkPKPhQ0MA4iWuU0HuoDUZqQKLU16yY");
     //  $returned_content =  json_decode(file_get_contents($url), true);
     // dd($returned_content);
    }
 

}

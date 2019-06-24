@extends($layout)
@section('header_scripts')
<link href="{{CSS}}ajax-datatables.css" rel="stylesheet">
@stop
@section('content')


<div id="page-wrapper" ng-controller="payments_report">
            <div class="container-fluid">
                <!-- Page Heading -->
                 <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>
                            @if($payment_mode=='online')
                            <li><a href="{{URL_ONLINE_PAYMENT_REPORTS}}">{{$payments_mode}}</a> </li>
                            @else
                            <li><a href="{{URL_OFFLINE_PAYMENT_REPORTS}}">{{$payments_mode}}</a> </li>
                            @endif
                           
                            <li>{{ $title }}</li>
                        </ol>
                    </div>
                </div>
                                
                <!-- /.row -->
                <div class="panel panel-custom">
                    <div class="panel-heading">
                        <h1>{{ $title }}</h1>
                    </div>
                    <div class="panel-body packages">
                        <div class="table-responsive"> 
                        <table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>{{ __('messages.image')}}</th>
                                    <th>{{ __('messages.user_name')}}</th>
                                    <th>{{ __('messages.item')}}</th>
                                    <th>{{ __('messages.plan')}}</th>
                                    <th>{{ __('messages.start_date')}}</th>
                                    <th>{{ __('messages.end_date')}}</th>
                                    <th>{{ __('messages.payment_gateway')}}</th>
                                    <th>{{ __('messages.updated_at')}}</th>
                                    <th>{{ __('messages.payment_status')}}</th>
                                    
                                </tr>
                            </thead>
                             
                        </table>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
{!! Form::open(array('url' => URL_PAYMENT_APPROVE_OFFLINE_PAYMENT, 'method' => 'POST', 'name'=>'formQuiz ',  )) !!}
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{__('messages.offline_payment_details')}}</h4>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-md-8 col-md-offset-2">
               <p><strong>{{__('messages.name')}}</strong> : @{{payment_record.item_name}}</p>
               <p><strong>{{__('messages.cost')}}</strong> : {{getCurrencyCode().' '}} @{{payment_record.cost}}</p>
               <p><strong>{{__('messages.coupon_applied')}}</strong> : @{{coupon_applied}}</p>
               <p><strong> @{{payment_record.other_details.coupon_applied}}</strong></p>
               <div ng-if="other_details.is_coupon_applied==1">
               <p><strong>{{__('messages.discount')}}</strong> : {{getCurrencyCode().' '}}@{{other_details.discount_availed}}</p>
               <p><strong>{{__('messages.after_discount')}}</strong> : {{getCurrencyCode().' '}}@{{other_details.after_discount}}</p>
               </div>
               <p><strong>{{__('messages.plan_type')}}</strong> : @{{payment_record.plan_type}}</p>
               <p><strong>{{__('messages.notes')}}</strong> :  @{{payment_record.notes}}</p>
               <p><strong>{{__('messages.created_at')}}</strong> : @{{payment_record.created_at}}</p>
               <p><strong>{{__('messages.updated_at')}}</strong> : @{{payment_record.updated_at}}</p>
               <p><strong>{{__('messages.comments')}}</strong> : <textarea class="form-control" name="admin_comment"></textarea></p>
               <input type="hidden" name="record_id" value="@{{payment_record.id}}">
           </div>
        </div>
      </div>
      <div class="modal-footer">
      <button class="btn btn-lg btn-success button" name="submit" value="approve" >{{ __('messages.approve') }}</button>
      <button class="btn btn-lg btn-danger button" name="submit" value="reject" >{{ __('messages.reject') }}</button>
        <button type="button" class="btn btn-lg btn-default button" data-dismiss="modal">{{ __('messages.close')}}</button>
      </div>
    </div>
{!! Form::close() !!}
  </div>
</div>
        </div>

       



@endsection
 

@section('footer_scripts')
  
 @include('common.datatables', array('route'=>$ajax_url, 'route_as_url' => TRUE))
 @include('payments.scripts.js-scripts');
 {{-- @include('common.deletescript', array('route'=>URL_QUIZ_DELETE)) --}}
<script>
function viewDetails(record_id)
{
    angular.element('#page-wrapper').scope().setDetails(record_id);
    angular.element('#page-wrapper').scope().$apply() 
 $('#myModal').modal('show');
}
</script>
@stop

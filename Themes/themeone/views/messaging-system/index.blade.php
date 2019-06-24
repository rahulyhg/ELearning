@extends($layout)
@section('content')
<div id="page-wrapper">
  <div class="container-fluid">
 <div class="row">
                   <div class="col-lg-12">
                       <ol class="breadcrumb">
                           <li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>
                           <li><a href="{{URL_MESSAGES}}">{{__('messages.messages')}}</a> </li>

                       </ol>
                   </div>
               </div>
               <div class="panel panel-custom">
                   <div class="panel-heading">
                       <div class="pull-right messages-buttons">
                           <a class="btn btn-lg btn-primary button" href="{{URL_MESSAGES}}"> {{__('messages.inbox').'('.$count = Auth::user()->newThreadsCount().')'}} </a>
                           <a class="btn btn-lg btn-danger button" href="{{URL_MESSAGES_CREATE}}"> 
                           {{__('messages.compose')}}</a>

                
                       </div>
                       <h1>{{__('messages.inbox')}}</h1>
                   </div>
                   <?php $currentUserId = Auth::user()->id;?>
                   <div class="panel-body packages">
                       <div class="row">
                           
                           <div class="col-md-12">
                             
                               <ul class="inbox-message-list inbox-message-nocheckbox">

                             



                                     @if(count($threads)>0)
                                     
                                       @foreach($threads as $thread)
                                       {{-- {{dd($currentUserId)}} --}}
                                       <?php $class = $thread->isUnread($currentUserId) ? 'alert-info' : ''; ?>
                                      <?php $sender = getUserRecord($thread->latestMessage->user_id); ?>
                                   <li class="unread-message {!!$class!!}">
                                   <?php
                                   $image_path ='';
                                   if(isset($sender->image))
                                       $image_path = getProfilePath($sender->image);
                                   else
                                       $image_path = IMAGE_PATH_PROFILE_THUMBNAIL_DEFAULT;
                                   ?>
                                       <img class="sender" src="{{$image_path}}" alt="">
                                        <a href="{{URL_MESSAGES_SHOW.$thread->id}}" class="message-suject">
                                           <h3>{{ucfirst($thread->subject)}}</h3>
                                           <p>{!! $thread->latestMessage->body !!}</p>
                                       </a>
                                       <span class="receive-time"><i class="mdi mdi-clock"></i> {{$thread->latestMessage->updated_at->diffForHumans()}}</span>
                                   </li>
                                     @endforeach
                                   @else
                                       <p>{{__('messages.sorry_no_messages')}}</p>
                                   @endif
                           



                               </ul>
                             
                                 <div class="custom-pagination pull-right">
                                  {!! $threads->links() !!}
                               </div>  
                           </div>
                       </div>





                   </div>
               </div>
           </div>
           <!-- /.container-fluid -->
       </div>
       
@stop
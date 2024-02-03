 <!-- sa-app__toolbar / end -->
 <!-- sa-app__body -->
 <div id="top" class="sa-app__body">
     <div class="mx-xxl-3 px-4 px-sm-5">
         <div class="py-5">
             <div class="row g-4 align-items-center">
                 <div class="col">
                     <nav class="mb-2" aria-label="breadcrumb">

                     </nav>
                     <h1 class="h3 m-0">All Questions</h1>
                 </div>
                 
             </div>
         </div>
     </div>
     <div class="mx-xxl-3 px-4 px-sm-5 pb-6">
         <div class="sa-layout">
             <!-- <div class="sa-layout__backdrop" data-sa-layout-sidebar-close=""></div> -->

             <div class="sa-layout__content">
                 <div class="card">
                 @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <div class="p-4"><input type="text" placeholder="Start typing to search for customers" class="form-control form-control--search mx-auto" id="table-search"></div>
                     <!-- <div class="sa-divider"></div> -->
                     <table class="sa-datatables-init" data-order="[[ 1, &quot;asc&quot; ]]" data-sa-search-input="#table-search" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                         <thead>
                             <tr>
                                <th>Id</th>
                                <th>Product</th>
                                <th>User</th>
                                <th>Question</th>
                                <th>Reply</th>
                                <th>Status</th>
                                <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach($questions as $question)
                             <tr>
                                        <td>{{$question->id}}</td>
                                        <td>{{$question->product->name}}</td>
                                        <td>{{$question->user->name}}</td>
                                        <td>{{$question->question}}</td>
                                        <td><a href="{{route('admin.all-answers',['id'=>$question->id])}}">See Answers</a></td>
                                        <td>@if($question->status == 1)<a href="#" wire:click.prevent='DeactiveQuestion({{$question->id}})'> Active </a> 
                                        @else <a href="#" wire:click.prevent='ActiveQuestion({{$question->id}})'>Deactive </a>
                                        @endif</td>
                                        <td>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this question-answer') || event.stopImmediatePropagation()" wire:click.prevent="deleteQuestion({{$question->id}})" style="margin-left:10px;"><i class="fa fa-times text-danger"></i></a>
                                        </td>
                                    </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>
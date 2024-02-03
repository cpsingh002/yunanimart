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
                                <th>Question</th>
                                <th>User</th>
                                <th>Verify</th>
                                <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach($questions as $question)
                             <tr>
                                        <td>{{$question->id}}</td>
                                        <td>{{$question->product->name}}</td>
                                        <td>{{$question->question}}</td>
                                        <td>{{$question->user->name}}</td>
                                        <td><button  class="btn btn-primary" wire:click.prevent="replyQuestion({{$question->id}})">Reply</button></td>
                                        <td>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this coupon') || event.stopImmediatePropagation()" wire:click.prevent="deleteQuestion({{$question->id}})" style="margin-left:10px;"><i class="fa fa-times text-danger"></i></a>
                                        </td>
                                    </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
     <div wire:ignore.self class="modal fade" id="answerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
        
            <div class="modal-header">
                
                <h4 class="modal-title fs-5" id="staticBackdropLabel">Question</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                <div class="mb-4">
                    <label for="form-banner/name" class="form-label">Question: </label>
                </div>
                <div class="mb-4">
                    <label for="form-review/message" class="form-label">Answer: </label>
                    <textarea type="text" class="form-control"
                        wire:model="answer" name='answer' ></textarea>
                        @error('answer') <p class="text-danger">{{$message}}</p> @enderror
                </div>        
            </div>
        
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary" wire:click.prevent="storeAnswer">Submit</button>
        </div>
        </div>
    </div>
</div>
 </div>
 @push('scripts')
<script>
    document.addEventListener('livewire:init', () => {
       Livewire.on('openanswerModal', (event) => {
        $('#answerModal').modal('show');
       });
    });
</script>
<script>
    document.addEventListener('livewire:init', () => {
       Livewire.on('openanswerModal', (event) => {
        $('#answerModal').modal('hide');
       });
    });
</script>
@endpush
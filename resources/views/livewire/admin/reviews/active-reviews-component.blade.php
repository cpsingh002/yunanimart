@extends('layouts.admin1')

@section('content')
 <!-- sa-app__toolbar / end -->
 <!-- sa-app__body -->
 <div id="top" class="sa-app__body">
     <div class="mx-xxl-3 px-4 px-sm-5">
         <div class="py-5">
             <div class="row g-4 align-items-center">
                 <div class="col">
                     <nav class="mb-2" aria-label="breadcrumb">

                     </nav>
                     <h1 class="h3 m-0">Active Reviews</h1>
                 </div>
                 <div class="col-auto d-flex">
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
                                <th>User-Id</th>
                                <th>Reting</th>
                                <th>Image</th>
                                <th>Message</th>
                                <th>Status</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach($reviews as $review)
                             <tr>
                                        <td>{{$review->id}}</td>
                                        <td>{{$review->product->name}}</td>
                                        <td>{{$review->user->name}}</td>
                                        <td>{{$review->rating}}</td>
                                        <td>@php
                                                $images = explode(",",$review->images);
                                            @endphp
                                            @foreach($images as $image)
                                                @if($image)
                                                        <img src="{{asset('admin/review')}}/{{$image}}" width="50" alt="slider">
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{$review->message}}</td>
                                        <td><a href="{{route('admin.change-active',['id'=> $review->id])}}">Active </a></td>
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
 @endsection
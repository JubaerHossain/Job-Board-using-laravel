@extends('layouts.home')
@section('title','Dreamploy Job | Following Employwer')
@push('css')    
<link rel="stylesheet" type="text/css" href="{{ asset('employe/css/custom_css.css') }}">
@endpush
@section('content')
    
            <div class="leftsidebar">
                    <div class="container">
                    <div class="row">
                        @include('employee.partials.menu')
                        
                        <div class="col-md-9 col-sm-12">
                                <ol class="breadcrumb panel-heading panel-heading-01" style="background-color: #d9d9d9; color: #333;">
                                        
                                        <li class="breadcrumb-item">Employer Followed</li>
                                </ol>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="my-4">
                                    
                                    <tr>
                                            <td class="text-center">There is no  Employer Followed !</td>
                                    </tr>  
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                     </div>
           </div>
@endsection
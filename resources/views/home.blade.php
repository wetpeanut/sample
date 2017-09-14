@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Category</th>
                            <th>Description</th>
                            <th colspan="2">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

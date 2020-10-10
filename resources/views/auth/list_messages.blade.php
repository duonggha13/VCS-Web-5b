@extends('layouts.index')
@section('script-css')
    <link rel="resources/css/messages.css">
@endsection

@section('content')
    <div class="row mt-5">
        <div class="col-sm-4 card" style="overflow:scroll; height: 400px">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                        <a class="mb-1">Name</a>
                    </div>
                    <p>Last msg</p>
                </li>
                <li class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                        <a class="mb-1">Name</a>
                    </div>a
                    <p>Last msg</p>
                </li>
                <li class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                        <a class="mb-1">Name</a>
                    </div>
                    <p>Last msg</p>
                </li>
                <li class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                        <a class="mb-1">Name</a>
                    </div>
                    <p>Last msg</p>
                </li>
                <li class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                        <a class="mb-1">Name</a>
                    </div>
                    <p>Last msg</p>
                </li>
                <li class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                        <a class="mb-1">Name</a>
                    </div>
                    <p>Last msg</p>
                </li>
                <li class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                        <a class="mb-1">Name</a>
                    </div>
                    <p>Last msg</p>
                </li>
                <li class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                        <a class="mb-1">Name</a>
                    </div>
                    <p>Last msg</p>
                </li>
                <li class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                        <a class="mb-1">Name</a>
                    </div>
                    <p>Last msg</p>
                </li>
                <li class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                        <a class="mb-1">Name</a>
                    </div>
                    <p>Last msg</p>
                </li>
                <li class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                        <a class="mb-1">Name</a>
                    </div>
                    <p>Last msg</p>
                </li>

            </ul>
        </div>


        <div class="col-sm-8 w-75">
            <div>To username</div>
            <div style="overflow-y: scroll; height: 338px">
                <table class="table table-fixed">
                    <tbody>
                    <tr>
                        <td style="float: right;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: left;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: right;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: left;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: right;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: left;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: right;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: left;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: right;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: left;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: right;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: left;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: right;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: left;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: right;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: left;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: right;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: left;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: right;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: left;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: right;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: left;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: right;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: left;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: right;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: left;">ABCDE</td>
                    </tr>
                    <tr>
                        <td style="float: right;">ABCDE</td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <form class="row" action="">
                <div class="col-lg-11">
                    <input type="text" placeholder="Message..." class="form-control" [(ngModel)]="message"/>
                </div>
                <div class="col-xs-3">
                    <button class="btn btn-info btn-block" (click)=""><i class="far fa-paper-plane"></i></button>
                </div>
            </form>

        </div>
    </div>
@endsection

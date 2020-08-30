<!DOCTYPE html>
<html>

@component('components.index.head')
@endcomponent

<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @component('components.index.header',[
        'count' => $count,
        'picture' => $profile->picture,
        'name' => $login_user->name
        ])
        @endcomponent

        <section class="content-header container">
            <button type="button" onclick="location.href='{{ url('/top') }}'"
                class="btn btn-primary pull-right ml-1">戻る</button>
            <h3>
                勉強会一覧
            </h3>
        </section>
        <!-- Main content -->
        <section class="container">
            <div class="box">
                <!-- general form elements -->
                <div class="box box-header">
                    <!-- /.box-header -->
                    <!-- form start -->
                </div>
                <div class="box-body">
                    <label>絞り込み</label>
                    <div class="card">
                        <div class="card-body">

                            <div class="row">

                                <!-- checkbox -->
                                <div class="form-group">
                                    <form role="form">
                                        <label>
                                            言語
                                            {{ Form::select('language', $languagesList->prepend('選択してください', ''), "",  ['class' => 'form-control','id' => 'selectedLanguage']) }}
                                        </label>

                                        <label>
                                            場所
                                            {{ Form::select('area', $areasList->prepend('選択してください', ''), "",  ['class' => 'form-control','id' => 'selectedArea']) }}
                                        </label>
                                    </form>
                                </div>
                            </div>
                            <button id="sendUpdateButton" type="button" class="btn btn-success pull-right">検索</button>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <section class="container">
            <div class="row">
                <div id="example-table"></div>
            </div>

        </section>

    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="container">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0.0
            </div>
        </div>
        <!-- /.container -->
    </footer>
    </div>
    <!-- ./wrapper -->
    <div class="modal fade" id="modal-success">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <h4 class="modal-title" id="title"></h4>
                </div>
                <div class="modal-body">
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel">
                            <div class="col-sm-4 pull-right">
                                <img class="profile-user-img img-fluid img-thumbnail rounded float-right"
                                    alt="profile_image" id='meeting_image' src="">
                            </div>
                            <div class="row invoice-info">

                                <div class="col-sm-4 invoice-col">
                                    <h6>ユーザー</h6>
                                    <ul id="user">
                                    </ul>
                                    <h6>言語</h6>
                                    <ul id="language">
                                    </ul>
                                    <h6>場所</h6>
                                    <ul id="area">
                                    </ul>
                                    <h6>開催日</h6>
                                    <ul id="date">
                                    </ul>
                                    <h6>概要</h6>
                                    <ul id="overview">
                                    </ul>
                                    <h6>参加人数</h6>
                                    <ul id="join">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col">
                                <button type="button" class="btn btn-default float-left"
                                    data-dismiss="modal">閉じる</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-primary float-right" id="join_button"
                                    value=""></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    @component('components.index.js_read')
    @endcomponent

    {{-- JavaScript処理の呼び出し --}}
    <script src="{{ asset('/js/home.js') }}"></script>
</body>

</html>
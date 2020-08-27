<!DOCTYPE html>
<html>

@component('components.index.head')
@endcomponent

<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-purple-light layout-top-nav">

        @component('components.index.header')
        @endcomponent

        <!-- Full Width Column -->
        <div class="content-wrapper">
            <!--<div class="container">-->
            <!-- Content Header (Page header) -->

            <section class="content-header container-fluid">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible">
                    {{ session('success') }}
                </div>
                @endif
            </section>
            <section class="content">
            
                {{-- ボックス --}}
                <div class="container-fluid">
                    <h3>
                        ようこそ！
                    </h3>
                    <p>プロフィールを充実させて勉強会への参加申請をしてみましょう</p>
                    <div class="row">
                        <div class="col-lg-4 col">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>検索</h3>
            
                                    <p>勉強会を検索する</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{ url('/index') }}" class="small-box-footer">More info
                                    <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col">
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3>プロフィール</h3>
            
                                    <p>ユーザ情報を更新する</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-document"></i>
                                </div>
                                <a href="{{ url('/userProfile') }}" class="small-box-footer">More info
                                    <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4 col">
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>チャット</h3>
            
                                    <p>メッセージを送る</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-chatbubble-working"></i>
                                </div>
                                <a href="{{ url('/chat') }}" class="small-box-footer">More info
                        <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div> --}}
                <div class="col-lg-4 col">
            
                    <div class="small-box bg-purple">
            
                        <div class="inner">
                            @if ($count!=0)
                            <a>
                                <span class="badge bg-success float-right"><i class="fas fa-clock"></i>{{ $count }}</span>
                            </a>
                            @endif
            
                            <h3>主催した勉強会</h3>
                            <p>勉強会の作成や主催した勉強会の閲覧</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-book"></i>
                        </div>
                        <a href="{{ url('/meeting') }}" class="small-box-footer">More info
                            <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
                </div>
                {{-- <div class="row"></div>
                    <h3>
                        あなたにおすすめの勉強会
                    </h3>
                    <p></p>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">ruby勉強会</h3>
                                    <div class="box-tools">
                                        <!-- This will cause the box to be removed when clicked -->
                                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                                            title="Remove"><i class="fa fa-times"></i></button>
                                        <!-- This will cause the box to collapse when clicked -->
                                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                            title="Collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    rubyの基礎について
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                        <div class="col-md-4">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">基礎学習勉強会</h3>
                                    <div class="box-tools">
                                        <!-- This will cause the box to be removed when clicked -->
                                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                                            title="Remove"><i class="fa fa-times"></i></button>
                                        <!-- This will cause the box to collapse when clicked -->
                                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                            title="Collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    pythonの基礎について
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                        <div class="col-md-4">
                            <div class="box box-warning">
                                <div class="box-header with-border">
                                    <h3 class="box-title">応用勉強会</h3>
                                    <div class="box-tools">
                                        <!-- This will cause the box to be removed when clicked -->
                                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                                            title="Remove"><i class="fa fa-times"></i></button>
                                        <!-- This will cause the box to collapse when clicked -->
                                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                            title="Collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    機械学習の応用について学ぶ
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                        <div class="col-md-4">
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">laravel</h3>
                                    <div class="box-tools">
                                        <!-- This will cause the box to be removed when clicked -->
                                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                                            title="Remove"><i class="fa fa-times"></i></button>
                                        <!-- This will cause the box to collapse when clicked -->
                                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                            title="Collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    laravelでポートフォリオを作ろう！
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                        <div class="col-md-4">
                            <div class="box box-danger">
            
                                <div class="box-header">
                                    <h3 class="box-title">php基礎</h3>
                                    <div class="box-tools">
                                        <!-- This will cause the box to be removed when clicked -->
                                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                                            title="Remove"><i class="fa fa-times"></i></button>
                                        <!-- This will cause the box to collapse when clicked -->
                                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                            title="Collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                    <div class="box-body">
                                        phpの基礎を学ぶ
                                    </div><!-- /.box-body -->
                                </div>
                            </div>
            
                        </div>
                    </div><!-- /.row --> --}}
                <!-- /.box -->
                </div>
            </section>


        </div>

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="container">
                <div class="pull-right">
                    <b>Version</b> 1.0.0
                </div>
            </div>
            <!-- /.container -->
        </footer>

    <!-- ./wrapper -->

    @component('components.top.js_read')
    @endcomponent

    {{-- JavaScript処理の呼び出し --}}
    <script src="{{ asset('/js/top/top.js') }}"></script>
</body>

</html>

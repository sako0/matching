<!DOCTYPE html>
<html>

@component('components.index.head')
@endcomponent

<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-purple-light layout-top-nav">
    <div class="wrapper">

        @component('components.index.header')
        @endcomponent

        <!-- Full Width Column -->
        <div class="content-wrapper">
            <!--<div class="container">-->
            <!-- Content Header (Page header) -->

            @component('components.index.main')
            @endcomponent
            <section class="content container-fluid">
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
                    <h4 class="modal-title">タイトル</h4>
                </div>
                <div class="modal-body">
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel">
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    <h6>言語</h6>
                                    <ul id="bodyTemperatureList">
                                    </ul>
                                    <h6>場所</h6>
                                    <ul id="bloodPressureList">
                                    </ul>
                                    <h6>開催日</h6>
                                    <ul id="bloodPressureList">
                                    </ul>
                                    <h6>概要</h6>
                                    <ul id="alcoholList">
                                    </ul>
                                </div>
                            </div>
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left"
                                    data-dismiss="modal">閉じる</button>
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

                    <div class="card-body tokyo-map">
                    <form method="GET" action="{{ action('PostsController@cities') }}">


                        <!-- Modalエリア -->
                        <img src="{{ asset('/img/23WARDS.png') }}" class="layer-img">
                        
                        <div id="btn" class="">
                            <div type="button" class="btn btn-warning area-btn city-center" data-toggle="modal" data-target="#modal01" data-toggle="tooltip" title="千代田区・中央区・新宿区・渋谷区・港区">中心部</div>
                            <div type="button" class="btn btn-warning area-btn city-east" data-toggle="modal" data-target="#modal02" data-toggle="tooltip" title="足立区・葛飾区・江戸川区・荒川区・台東区・墨田区・江東区">東部</div>
                            <div type="button" class="btn btn-warning area-btn city-west" data-toggle="modal" data-target="#modal03 " data-toggle="tooltip" title="練馬区・中野区・杉並区">西部</div>
                            <div type="button" class="btn btn-warning area-btn city-south" data-toggle="modal" data-target="#modal04" data-toggle="tooltip" title="世田谷区・目黒区・品川区・大田区">南部</div>
                            <div type="button" class="btn btn-warning area-btn city-north" data-toggle="modal" data-target="#modal05" data-toggle="tooltip" title="板橋区・北区・豊島区・文京区">北部</div>
                        </div>
                        <div class="modal fade" id="modal01" tabindex="-1" role="dialog" aria-labelledby="modal01" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="city_list">
                                            <ul id="mainimage">
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 16 }}" class="btn btn-outline-warning">千代田区</button>
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 17 }}" class="btn btn-outline-warning">中央区</button>
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 11 }}" class="btn btn-outline-warning">新宿区</button>
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 10 }}" class="btn btn-outline-warning">渋谷区</button>
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 22 }}" class="btn btn-outline-warning">港区</button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modal02" tabindex="-1" role="dialog" aria-labelledby="modal02" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="city_list">
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 1 }}" class="btn btn-outline-warning">足立区</button>
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 6 }}" class="btn btn-outline-warning">葛飾区</button>
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 4 }}" class="btn btn-outline-warning">江戸川区</button>
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 2 }}" class="btn btn-outline-warning">荒川区</button>
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 15 }}" class="btn btn-outline-warning">台東区</button>
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 13 }}" class="btn btn-outline-warning">墨田区</button>
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 8 }}" class="btn btn-outline-warning">江東区</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modal03" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="city_list" data-list="3">
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 20 }}" class="btn btn-outline-warning">練馬区</button>
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 19 }}" class="btn btn-outline-warning">中野区</button>
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 12 }}" class="btn btn-outline-warning">杉並区</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modal04" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="city_list" data-list="4">
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 14 }}" class="btn btn-outline-warning">世田谷区</button>
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 23 }}" class="btn btn-outline-warning">目黒区</button>
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 9 }}" class="btn btn-outline-warning">品川区</button>
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 5 }}" class="btn btn-outline-warning">大田区</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modal05" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="city_list" data-list="5">
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 3 }}" class="btn btn-outline-warning">板橋区</button>
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 7 }}" class="btn btn-outline-warning">北区</button>
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 18 }}" class="btn btn-outline-warning">豊島区</button>
                                            <button type="submit" name="cat_id" value="{{ $cat_id = 21 }}" class="btn btn-outline-warning">文京区</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>

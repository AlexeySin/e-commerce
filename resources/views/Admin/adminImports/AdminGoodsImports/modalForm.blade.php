
<form id="good-change-form{{ $good->id }}"
                        action="{{ URL::to('/admin/admin-goods-edit') }}"
                        method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden"
                          name="good"
                          value="{{ $good->id }}">
                        <div class="container">
                          <div class="row">




                            <div class="col-md">
                              <b>Name:</b>
                              <input class="form-control"
                                type="text"
                                name="name"
                                value="{{ $good->name }}">
                              <br>
                              <b>Weight:</b>
                              <input type=number
                                name="weight"
                                step=0.1
                                value="{{ $good->weight }}"
                                class="form-control w-150" />
                              <br>
                              <b>Price:</b>
                              <input type=number
                                name="price"
                                step=0.1
                                value="{{ $good->price }}"
                                class="form-control w-150" />
                              <br>
                              <b>Rating:</b>
                              <input type=number
                                name="rating"
                                step=1
                                value="{{ $good->rating }}"
                                class="form-control w-150" />
                              <br>
                              <div>
                                <b>Weight Type:</b>
                                <br>
                                <div class="btn-group"
                                  style="width:500px !important">
                                  <select name="w_type"
                                    class="form-control">
                                    <option>l</option>
                                    <option>kg</option>
                                    <option>th</option>
                                  </select>
                                </div>
                              </div>
                              <br>
                            </div>


                            <div id="photoEditGood"
                              class="col-md">
                              <div class="container-fluid">
                                <div class="col-md-6 alert alert-secondary">
                                  <div class="form-group">
                                    <div class="input-group">
                                      <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                          <i class="fa fa-image btn btn-secondary"></i>
                                          <input type="file"
                                            id="imgInp"
                                            name="good_image_up"
                                            accept="image/*">
                                        </span>
                                      </span>
                                      <input type="text"
                                        name="new_img_name_good"
                                        class="form-control"
                                        value="{{ str_replace('/images/','',$good->image) }}"
                                        readonly
                                        id="inpt">
                                    </div>
                                    <img id='img-upload'
                                      src="{{ URL::to('/').$good->image}}" />
                                  </div>
                                </div>
                              </div>
                              <div class="container"
                                id="result"></div>
                              <input type="hidden"
                                name="old_category_image_name"
                                value="{{ $good->image }}"
                                accept="image/*">
                              <br>
<div class="btn-group">

                              <div class="container">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="button-group">
                                      <button type="button"
                                        class="btn btn-default btn-sm dropdown-toggle"
                                        data-toggle="dropdown">
                                        <i class="fa fa-pie-chart"></i>
                                      </button>
                                      <ul class="dropdown-menu">
                                        @foreach($categories as $cat)
                                        <li>
                                          <input type="checkbox"
                                            id="cats{{ $good->id }}"
                                            name="categories_checked[]"
                                            value="{{ $cat->id }}"
                                          @if(count($good->categorie)>0)
                                          @foreach($good->categorie as $gcat)
                                          @if($gcat["id"] == $cat->id)
                                          checked
                                          @endif
                                          @endforeach
                                          @endif
                                          />
                                          @if(App::getLocale()=='ru')
                                          {{ $cat->RUname }}
                                          @elseif(App::getLocale()=='en')
                                          {{ $cat->ENname }}
                                          @else
                                          {{ $cat->UKname }}
                                          @endif
                                        </li>
                                        @endforeach
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="container">
                                  <div class="row">
                                    <div class="col-lg-12">
                                      <div class="button-group">
                                        <button type="button"
                                          class="btn btn-default btn-sm dropdown-toggle"
                                          data-toggle="dropdown">
                                          <i class="fa fa-tags"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                          @foreach($sales as $s)
                                          <li>
                                            <input type="checkbox"
                                              id="cats{{ $good->id }}"
                                              name="sales_checked[]"
                                              value="{{ $s->id }}"
                                            @if(count($good->sale)>0)
                                            @foreach($good->sale as $gs)
                                            @if($gs["id"] == $s->id)
                                            checked
                                            @endif
                                            @endforeach
                                            @endif
                                            />
                                            {{ $s->name }} ({{ $s->percentages }}%)
                                          </li>
                                          @endforeach
                                        </ul>
                                      </div>
                                      <span id="precGood"></span>
                                    </div>
                                  </div>
                                </div>


                                <div class="container">
                                    <div class="row">
                                      <div class="col-lg-12">
                                        <div class="button-group">
                                          <button type="button"
                                            class="btn btn-default btn-sm dropdown-toggle"
                                            data-toggle="dropdown">
                                            <i class="fa fa-thumbs-up"></i>
                                          </button>
                                          <div class="dropdown-menu">
                                               <input type="text"
                                        class="form-control"
                                        value="{{ count($good->like) }}"
                                        readonly/>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

</div>

                            </div>

                          </div>
                        </div>
                      </form>
<div id="airport-create-modal" class="fade modal" role="dialog" tabindex="-1" style="margin-left: 15%; margin-top: 20px">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h1 class="page-title" style="margin:5px;">Add Airport</h1>
                </div>
                <div class="modal-body">
                    <div id="operator-create-modal-content">
                        <!--NEW-->
                        <form id="operator-create-ajax" action="{{route('airports.store')}}" method="post">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group field-operatorform-name required">
                                        <label class="control-label" for="operatorform-name">Name</label>
                                        <input id="operatorform-name" class="form-control input-field" name="name" required type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group field-operatorform-address_line_1 required">
                                        <label class="control-label" for="icao">ICAO</label>
                                        <input id="icao" class="form-control input-field" name="icao" type="text">
                                    </div>
                                </div>
                            </div>

                            

                            <div class="row">
                                <div class="col-md-6 modal-select2">
                                    <div class="form-group field-operatorform-country required">
                                        <label class="control-label" for="operatorform-country">Country</label>
                                        <select id="operatorform-country" class="form-control input-field" name="country_id">
                                            <option value="">Select</option>
                                            @foreach($options as $option)
                                            <option value="{{$option->id}}">{{$option->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 modal-select2">
                                    <div class="form-group field-operatorform-city">
                                        <label class="control-label" for="operatorform-city">City</label>
                                        <input id="operatorform-business_phone" class="form-control input-field" name="city" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Add New</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
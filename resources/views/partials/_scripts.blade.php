<!-- Google Autocomplete -->
<script type="text/javascript" src="{{URL::to('assets-web\js\jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('assets-web\js\plugins.js')}}"></script>
<script type="text/javascript" src="{{URL::to('assets-web\js\scripts.js')}}"></script>
@yield('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&libraries=places&callback=initAutocomplete"></script>
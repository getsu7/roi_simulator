<x-head/>
<x-navbar/>
<body>

    <div class="m-3">
        <form action="/country" method="POST">    

            @csrf
            <div class="mb-3">
                <label for="country">Country</label>
                <input type="text" class="form-control" name="name" placeholder="Enter country name">
            </div>

            <button class="btn btn-success" type="submit">Save</button>     
        </form>
    </div>



    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
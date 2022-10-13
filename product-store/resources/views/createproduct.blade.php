<!doctype html>
    <html lang="{{ app()->getLocale() }}">
    <head>
      <title>Create Product | Product Store</title>
      <!-- styling etc. -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <form method="POST" action="{{ config('app.url')}}/products">
	                {{ csrf_field() }}
                    <h1> Enter Details to create a product</h1>
                    <div class="form-input">
                        <label>Name</label> <input type="text" name="name">
                    </div>
                    <div class="form-input">
                        <label>Description</label> <input type="text" name="description">
                    </div>
                    <div class="form-input">
                        <label>Count</label> <input type="number" name="count">
                    </div>
                    <div class="form-input">
                        <label>Price</label> <input type="number" name="price">
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>


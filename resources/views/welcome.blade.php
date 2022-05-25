<html>
    <head>
    </head>
    <body>
        <h1>todo list 2<h1>
            

            <form method="post" action="{{ route('saveItem')}}" accept-charset="UTF-8">
                    {{csrf_field() }}
                    <label for="listItem">New Todo Item</label></br>
                    <input type="text" name="listItem"></br> 

                    <button type="submit">Save Item</button>
                </form>

                
    </body>

</html>
<html>
    <head>
    </head>
    <body>
        <h1>todo list 2<h1>

            @foreach ($listItems as $listItem)
                <p>Item: {{ $listItem->name }}  </br>Is complete: {{$listItem->is_complete}} 
                <form method="post" action="{{ route('markCompleteRouteFront', $listItem->id)}}" accept-charset="UTF-8">
                    {{csrf_field() }}
                    <button type="submit" style="max-height: 25px; margin-left:20px;">Mark complete</button>
                </form>
                </p>
            @endforeach

            <form method="post" action="{{ route('saveItem0')}}" accept-charset="UTF-8">
                    {{csrf_field() }}
                    <label for="listItems23">New Todo Item</label></br>
                    <input type="text" name="listItem1"></br></br> 
                    <label for="listItems23">New Todo Item must be a number</label></br>
                   <input type="text" name="listItem2"></br> 
                    <button type="submit">Save Item</button>
                </form>
    </body>

</html>
<style>
    form {
        width: 500px;
        margin: 50px auto;
        text-align: center;
        padding: 30px;
        background-color: #f2f2f2;
        border: 1px solid #ccc;
    }

    input[type="text"],
    textarea,
    input[type="number"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
    }
    #content{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
    }
    input[type="submit"],
    input[type="button"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover,
    input[type="button"]:hover {
        background-color: #3e8e41;
    }
</style>
<form action="/update/{{$posts->id}}" method="post">
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" placeholder="Enter title" value="{{$posts->title}}"><br>
    <label for="content">Content:</label>
    <input id="content" name="content" placeholder="Enter content" value="{{$posts->content}}"><br>
    <input type="submit" value="Submit">
</form>


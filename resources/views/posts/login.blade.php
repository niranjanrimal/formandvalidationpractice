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
<form action="/insert" method="post">
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" placeholder="Enter title"><br>
    <label for="content">Content:</label>
    <textarea id="content" name="content" placeholder="Enter content"></textarea><br>
    <input type="submit" value="Submit">
    <input type="button" value="Show List" onclick="location.href='/read'">
    <input type="button" value="Edit" onclick="location.href='/edit1'">
</form>
<br>
<form>
    <label for="id">Enter ID to show individual post:</label>
    <input type="number" id="id" name="id" placeholder="Enter ID">
    <input type="button" value="Show Individual Post" onclick="location.href='/show/'+document.getElementById('id').value">
</form>

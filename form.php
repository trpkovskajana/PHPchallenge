<html>
<style>
    div {
        width: 70%;
        margin: auto;
    }
    select {
        width: 100%;
        padding: 15px 10px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type=submit] {
        background-color: dodgerblue;
        border-radius: 4px;
        border-color: dodgerblue;
    }
</style>
<body>

<div>
    <h1>Filter Reviews</h1>

    <form action="challenge.php" method="post">
        <label for="rating">Order by rating:</label>
        <select id="rating" name="orderByRating">
            <option value="highest">Highest first</option>
            <option value="lowest">Lowest first</option>
        </select>
        <label for="minrating">Minimum rating:</label>
        <select id="minrating" name="minimumRating">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <label for="date">Order by date:</label>
        <select id="date" name="orderByDate">
            <option value="oldest">Oldest first</option>
            <option value="newest">Newest first</option>
        </select>
        <label for="text">Prioritize by text:</label>
        <select id="text" name="prioritizeByText">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>

        <input  type="submit">
    </form>
</div>
</body>
</html>




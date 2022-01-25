<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>編集</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>タイトル</td>
                <td><input type="text" name="title" value=""></td>
            </tr>
            <tr>
                <td>内容</td>
                <td><textarea name="body" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>完了予定</td>
                <td><input type="date" name="finish_date" value=""></td>
            </tr>
            <tr>
                <td>ステータス</td>
                <td>
                    <select name="status" id="">
                        <option value="0">未着手</option>
                        <option value="1" selected >着手中</option>
                        <option value="2">完了</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit">登録</button>
        <input type="hidden" name="id" value="">
    </form>
</body>
</html>
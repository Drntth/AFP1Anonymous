<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "AFPHíroldal";



$connection = mysqli_connect($hostname, $username, $password, $database);

if($connection){
    echo "Connection established!" . "<br>";
} else {
     die("Failed to connect to the database! " . mysqli_connect_error() . "<br>");
}

//$query = "CREATE TABLE users (id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(150), passwd VARCHAR(200), email VARCHAR(200), role_id INT)";
//$result = mysqli_query($connection, $query);

//$role = "CREATE TABLE role (id INT AUTO_INCREMENT PRIMARY KEY, role_name VARCHAR(100))";
//$result = mysqli_query($connection, $role);

/*
$user_role =  "CREATE TABLE user_role (
    user_id INT,
    role_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (role_id) REFERENCES role(id)
)";

$result = mysqli_query($connection, $user_role);
*/
/*
$alter = "ALTER TABLE users ADD CONSTRAINT role_id_fk FOREIGN KEY (role_id) REFERENCES role(id)";
$result = mysqli_query($connection, $alter);
*/

//$insert = "INSERT INTO role (role_name) VALUES ('olvasó')";
//$insert2 = "INSERT INTO role (role_name) VALUES ('szerkesztő')";
//$insert3 = "INSERT INTO role (role_name) VALUES ('adminisztrátor')";

//$result = mysqli_query($connection, $insert3);

/*
$permission = "CREATE TABLE permission (
    id INT AUTO_INCREMENT PRIMARY KEY,
    permission_name VARCHAR(150)
)";

$result = mysqli_query($connection, $permission);
*/

/*
$role_permission = "CREATE TABLE role_permission (
    role_id INT,
    permission_id INT,
    PRIMARY KEY (role_id, permission_id),
    FOREIGN KEY (role_id) REFERENCES role(id) ON DELETE CASCADE,
    FOREIGN KEY (permission_id) REFERENCES permission(id) ON DELETE CASCADE
)";

*/

//$result = mysqli_query($connection, $role_permission);
/*
$article = "CREATE TABLE article (

    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(250),
    author_id INT,
    publish_date DATETIME,
    category_id INT,
    FOREIGN KEY (author_id) REFERENCES users(id)
    
)";

$result = mysqli_query($connection, $article);
*/

/*
$category = "CREATE TABLE category (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(150)
)";

$result = mysqli_query($connection, $category);
*/
/*
$alter2 = "ALTER TABLE article ADD FOREIGN KEY (category_id) REFERENCES category(id)";

$result = mysqli_query($connection, $alter2);
*/

/*
$tag = "CREATE TABLE tag (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tag_name VARCHAR(100)
)";
*/

/*
$article_tag = "CREATE TABLE article_tag (
    article_id INT,
    tag_id INT,
    PRIMARY KEY (article_id, tag_id),
    FOREIGN KEY (article_id) REFERENCES article(id) ON DELETE CASCADE,
    FOREIGN KEY (tag_id) REFERENCES tag(id) ON DELETE CASCADE
)";

$result = mysqli_query($connection, $article_tag);
*/
/*
if($result){
    echo "article_tag created successfully!";
} else {
    echo "Failed to create article_tag! " . mysqli_error($connection);
}
*/
    
    

?>
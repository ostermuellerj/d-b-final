import java.sql.*;

//Student: StudentId, StudentName, Major
public class jdbc_list_students {
    // The main program that inserts a restaurant
    public static void main(String[] args) throws SQLException {
        String Username = "gbglenn"; // Change to your own username
        String mysqlPassword = "EiGaix8o"; // Change to your own mysql Password

        // Connect to the database
        jdbc_db myDB = new jdbc_db();
        myDB.connect(Username, mysqlPassword);
        myDB.initDatabase();

        // For debugging purposes: Show the database before the insert
        StringBuilder builder = new StringBuilder();
        String query1 = "SELECT * from Student";
        builder.append("<br> Student table:" + myDB.query(query1) + "<br>");
        System.out.println(builder.toString());

        myDB.disConnect();
    }
}

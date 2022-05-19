<?php
Class Model {

    // DB Variable.
    public $db;

    public function __construct() {
        // Set up the database source name (DSN)
		$dsn = 'sqlite:./DB/3DApp.db';

        try {
            $this->db = new PDO($dsn, 'gaith', 'password', array(
                                                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                                        PDO::ATTR_EMULATE_PREPARES => false,
            ));
        } catch (PDOEXception $e) {
            echo "I'm sorry, Martin. I'm afraid I can't connect to the database!";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
        }
    }

    public function dbCreateTable () {
        try {
            $this->db->exec("CREATE TABLE Drinks (id INTEGER AUTO_INCREMENT PRIMARY KEY (id), brand TEXT, founded TEXT, brandDescription TEXT, moreInfo TEXT)");
            return "Drinks table is successfully created inside 3DApp.db file";
        } catch (PDOEXception $e) {
            print new Exception($e->getMessage());
        } finally {
            // Close the database connection
            $this->db = NULL;
        }
    }

    public function dbInsertData () {
        try {
            $this->db->exec(
                "INSERT INTO Drinks (brand, founded, brandDescription, moreInfo)
                    VALUES ('Coca Cola', 'New York Harbour, 1886', 'It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!', 'https://www.coca-cola.co.uk/brands/coca-cola-original-taste' );" .
                "INSERT INTO Drinks (brand, founded, brandDescription, moreInfo)
                    VALUES ('Sprite', 'West Germany, 1959', 'First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the worlds leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.', 'https://www.coca-cola.co.uk/drinks/sprite/sprite');" .
                "INSERT INTO Drinks (brand, founded, brandDescription, moreInfo)
                    VALUES ('Dr Pepper', 'Texas, 1885', 'Dr Pepper has a unique, sparkling blend of 23 fruit flavours has been around for well over a century and it is still the same, with that distinctive flavour you just can not quite put your tongue on. It was created by T exas pharmacist Charles Alderton in 1885. The distinctive, bold taste of Dr Pepper has been popular ever since.', 'https://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper' );" .
                "INSERT INTO Drinks (brand, founded, brandDescription, moreInfo)
                VALUES ('Appletiser', 'South Africa, 1966', 'In 1966, Edmond Lombardi began creating his sparkling fruit juice, Appletiser, by blending fruit juice with carbonated water. The business was based in Elgin valley of the Western Cape, South Africa. Exports began in 1969 to two archipelagos: the Canary Islands (Spain) and Japan.', 'https://www.coca-cola.co.uk/brands/appletiser' );"
            );
        } catch (PDOEXception $e) {
            print new Exception($e->getMessage());
        } finally {
            // Close the database connection
            $this->db = NULL;
        }
    }

    public function dbGetData () {
        try {
            $select = 'SELECT * FROM Drinks';
            $query = $this->db->query($select);
            $result = NULL;
            $i = 0;
            
            // Loop through data in the database.
            while($data = $query->fetch()) {
                $result[$i]['brand'] = $data['brand'];
                $result[$i]['founded'] = $data['founded'];
                $result[$i]['brandDescription'] = $data['brandDescription'];
                $result[$i]['moreInfo'] = $data['moreInfo'];
                $i++;
            }
            // return $result;
            return json_encode($result);
        } catch (PDOEXception $e) {
            print new Exception($e->getMessage());
        } finally {
            // Close the database connection
            $this->db = NULL;
        }
    }
}
?>
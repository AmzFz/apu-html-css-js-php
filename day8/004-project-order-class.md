A PHP class named `Order` with CRUD operations, including a method to cancel an order:

```php
class Order {
    private $db; // PDO instance
    private $order_id;
    private $book_id;
    private $customer_name;
    private $customer_email;
    private $order_date;
    private $quantity;
    private $total_price;
    private $shipping_address;
    private $order_status;

    // Constructor
    public function __construct(PDO $db, $book_id, $customer_name, $customer_email, $order_date, $quantity, $total_price, $shipping_address) {
        $this->db = $db;
        $this->book_id = $book_id;
        $this->customer_name = $customer_name;
        $this->customer_email = $customer_email;
        $this->order_date = $order_date;
        $this->quantity = $quantity;
        $this->total_price = $total_price;
        $this->shipping_address = $shipping_address;
        $this->order_status = 'Pending'; // default status
    }

    // Getters
    public function getOrderId() {
        return $this->order_id;
    }

    public function getBookId() {
        return $this->book_id;
    }

    public function getCustomerName() {
        return $this->customer_name;
    }

    public function getCustomerEmail() {
        return $this->customer_email;
    }

    public function getOrderDate() {
        return $this->order_date;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getTotalPrice() {
        return $this->total_price;
    }

    public function getShippingAddress() {
        return $this->shipping_address;
    }

    public function getOrderStatus() {
        return $this->order_status;
    }

    // Setters
    public function setBookId($book_id) {
        $this->book_id = $book_id;
    }

    public function setCustomerName($customer_name) {
        $this->customer_name = $customer_name;
    }

    public function setCustomerEmail($customer_email) {
        $this->customer_email = $customer_email;
    }

    public function setOrderDate($order_date) {
        $this->order_date = $order_date;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function setTotalPrice($total_price) {
        $this->total_price = $total_price;
    }

    public function setShippingAddress($shipping_address) {
        $this->shipping_address = $shipping_address;
    }

    public function setOrderStatus($order_status) {
        $this->order_status = $order_status;
    }

    // CRUD Operations
    public function create() {
        $query = "INSERT INTO orders (book_id, customer_name, customer_email, order_date, quantity, total_price, shipping_address, order_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$this->book_id, $this->customer_name, $this->customer_email, $this->order_date, $this->quantity, $this->total_price, $this->shipping_address, $this->order_status]);
        $this->order_id = $this->db->lastInsertId();
    }

    public function read($order_id) {
        $query = "SELECT * FROM orders WHERE order_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$order_id]);
        $order = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->order_id = $order['order_id'];
        $this->book_id = $order['book_id'];
        $this->customer_name = $order['customer_name'];
        $this->customer_email = $order['customer_email'];
        $this->order_date = $order['order_date'];
        $this->quantity = $order['quantity'];
        $this->total_price = $order['total_price'];
        $this->shipping_address = $order['shipping_address'];
        $this->order_status = $order['order_status'];
    }

    public function update() {
        $query = "UPDATE orders SET book_id = ?, customer_name = ?, customer_email = ?, order_date = ?, quantity = ?, total_price = ?, shipping_address = ?, order_status = ? WHERE order_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$this->book_id, $this->customer_name, $this->customer_email, $this->order_date, $this->quantity, $this->total_price, $this->shipping_address, $this->order_status, $this->order_id]);
    }

    public function delete() {
        $query = "DELETE FROM orders WHERE order_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$this->order_id]);
    }

    public function cancelOrder() {
        $this->order_status = 'Cancelled';
        $this->update();
    }
}
```

**Notes**:
We need to do changes as per requirements.


--------

```sql
CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    book_id INT,
    userid VARCHAR(255) NOT NULL,
    order_date DATE NOT NULL,
    quantity INT NOT NULL,
    total_price DECIMAL(10, 2) NOT NULL,
    shipping_address TEXT NOT NULL,
    order_status ENUM('Pending', 'Shipped', 'Delivered', 'Cancelled') NOT NULL DEFAULT 'Pending',
    FOREIGN KEY (book_id) REFERENCES books(book_id)
);
```

**Notes**:
1. `order_id` is set as the primary key and will auto-increment.
2. `book_id` is a foreign key that references the `book_id` in the `books` table. This establishes the relationship between the `orders` and `books` tables.
3. `userid`, `customer_email`, `order_date`, `quantity`, `total_price`, `shipping_address`, and `order_status` are fields related to the order details.
4. `order_status` is an ENUM type that can have one of the values: 'Pending', 'Shipped', 'Delivered', or 'Cancelled'. The default status is 'Pending'.
5. Adjust the field types and lengths based on your specific requirements.

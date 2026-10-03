# Assignment 2 — Arrays

This assignment practices what we learned in **Week 3**: indexed arrays, associative arrays, two-dimensional arrays, `for` and `foreach` loops, and HTML tables.

📄 **activity-1.php … activity-3.php** — one file for each activity
📁 **[Screen_Shot](Screen_Shot/)** — picture of each file (code + output), plus a [README](Screen_Shot/README.md) that explains the code.

---

## The activities

| # | File | Question |
|---|---|---|
| 1 | [activity-1.php](activity-1.php) | Use the array `5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9`. Print the elements, the **total**, the total of **even** and **odd** elements, and the **minimum** and **maximum** with their **positions**. |
| 2 | [activity-2.php](activity-2.php) | Store **Light / Normal / Dark** shades of **Red / Green / Blue** in a 2D array and show them in a **table**. |
| 3 | [activity-3.php](activity-3.php) | Store **student information** (ID, Name, Phone, Address) in an array and show it in a **table**. |

### Results of Activity 1
| Item | Value |
|---|---|
| Total of all elements | 35 |
| Total of even elements | 30 |
| Total of odd elements | 5 |
| Minimum | -7 (positions 2, 5, 10) |
| Maximum | 12 (positions 3, 8) |

---

## Concepts used

### Indexed array
```php
$nums = array(5, -7, 12);
echo $nums[0];      // 5  (index starts at 0)
count($nums);       // 3  (number of elements)
```
- **Index** starts at **0**, but people count **positions** from **1**. So position = index + 1.

### Associative array
```php
$s = array("ID" => "CA221", "Name" => "Mohamed Ahmed Ali");
echo $s["Name"];
```

### Two-dimensional array
An array **inside** an array — like a table with rows and columns.
```php
$colors["Dark"]["Red"];   // Dark Red
```

### Loops for arrays
- `for ($i = 0; $i < count($nums); $i++)` — uses the **index**.
- `foreach ($colors as $shade => $row)` — gives the **key** and the **value**.
- A `foreach` inside a `foreach` reads a 2D array.

### Useful functions
- `count()` — number of elements
- `min()` / `max()` — smallest / biggest value

### HTML table
`<table border='1'>` → `<tr>` (row) → `<th>` (header cell) / `<td>` (normal cell).

---

## How to run

1. Copy the `Assignment 2` folder into `C:\xampp\htdocs\` and rename it to `assignment2`.
2. Start **Apache** in XAMPP.
3. Open `http://localhost/assignment2/activity-1.php` (change the number for other activities).

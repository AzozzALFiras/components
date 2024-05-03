# Form 

```html
<x-card-body-6 title="User" description="new User" route="{{ route('dashboard') }}" method="POST">
<x-input-label label="Email" name="email" required type="email" />
<x-input-label label="Number" name="number" required type="number" />
</x-card-body-6>
```

# Button 

```html
<x-button-gradient>@lang('messages.Submit')</x-button-gradient>
```

# Buttons

```html
<x-button-class className="secondary">Submit</x-button-class>
<x-button-class className="primary">Submit</x-button-class>
<x-button-class className="success">Submit</x-button-class>
<x-button-class className="danger">Submit</x-button-class>
<x-button-class className="warning">Submit</x-button-class>
<x-button-class className="info">Submit</x-button-class>
<x-button-class className="light">Submit</x-button-class>
<x-button-class className="dark">Submit</x-button-class>
<x-button-class className="success">Submit</x-button-class>

```


# Input With Label 

```html
<x-input-with-label label="Username" name="username" required type="text" />
```


# Table

```html
<x-table title="Basic Table" description="Add class .table">
<x-table-header>
<th>Profile</th>
<th>VatNo.</th>
<th>Created</th>
<th>Status</th>
</x-table-header>
<x-table-row>
<td>Jacob</td>
<td>53275531</td>
<td>12 May 2017</td>
<td><label class="badge badge-danger">Pending</label></td>
</x-table-row>
<!-- Add more rows as needed -->
</x-table>
```
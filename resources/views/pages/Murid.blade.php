@extends('layouts.app')

@section('content')
<div class="table-card-custom">
      <!-- Header Controls -->
      <div class="table-header-control">
        <!-- Search bar -->
        <div class="table-search-box">
          <i class="bi bi-search table-search-icon"></i>
          <input type="text" class="table-search-input" placeholder="Search orders or products...">
        </div>
        <!-- Action buttons / Filter options -->
        <div class="table-filter-group">
          <div class="dropdown">
            <button class="btn-table-action dropdown-toggle" type="button" id="dropdownFilterStatus"
              data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-funnel"></i> Status Filter
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownFilterStatus">
              <li><a class="dropdown-item" href="#">All Statuses</a></li>
              <li><a class="dropdown-item" href="#">Paid / Success</a></li>
              <li><a class="dropdown-item" href="#">Processing</a></li>
              <li><a class="dropdown-item" href="#">Cancelled / Failed</a></li>
            </ul>
          </div>
          <button class="btn-table-action" type="button">
            <i class="bi bi-file-earmark-arrow-down"></i> Export
          </button>
        </div>
      </div>

      <!-- Responsive Table Wrapper -->
      <div class="table-responsive">
        <table class="table-custom">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama Murid</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <!-- Row 1 -->
            <tr>
              <td class="table-order-id">#ORD-9982</td>
              <td>
                <div class="table-user-cell">
                  <img src="assets/images/user_1.jpg" alt="Eleanor Pena" class="table-user-avatar"
                    onerror="this.src='assets/images/avatar.png'">
                  <div>
                    <div class="table-user-name">Eleanor Pena</div>
                    <div class="table-user-sub">eleanor.pena@example.com</div>
                  </div>
                </div>
              </td>
              </td>
            </tr>
            <!-- Row 2 -->
            <tr>
              <td class="table-order-id">#ORD-9981</td>
              <td>
                <div class="table-user-cell">
                  <img src="assets/images/user_2.jpg" alt="Wade Warren" class="table-user-avatar"
                    onerror="this.src='assets/images/avatar.png'">
                  <div>
                    <div class="table-user-name">Wade Warren</div>
                    <div class="table-user-sub">wade.warren@example.com</div>
                  </div>
                </div>
              </td>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
@endsection

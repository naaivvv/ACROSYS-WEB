
<div class="w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
    <div class="flex justify-between border-gray-200 border-b dark:border-gray-700 pb-3">
      <dl>
        <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Generated tickets this year</dt>
        <dd class="leading-none text-3xl font-bold text-gray-900 dark:text-white tickets-year">0</dd>
      </dl>
      <div>
        <span class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
          <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
          </svg>
           Reserve Rate&nbsp;<span class="reserve-rate">0</span>%
        </span>
      </div>
    </div>

    <div class="grid grid-cols-3 py-3">
      <dl>
        <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Reserved</dt>
        <dd class="leading-none text-xl font-bold text-green-500 dark:text-green-400 reserved-count">0</dd>
      </dl>
      <dl>
        <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Pending</dt>
        <dd class="leading-none text-xl font-bold text-orange-600 dark:text-orange-500 pending-count">0</dd>
      </dl>
      <dl>
        <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Terminated</dt>
        <dd class="leading-none text-xl font-bold text-red-600 dark:text-red-500 terminated-count">0</dd>
      </dl>
    </div>

    <div id="bar-chart"></div>
      <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
        <div class="flex justify-end items-center pt-5">
          {{-- <!-- Button -->
          <button
            id="dropdownDefaultButton"
            data-dropdown-toggle="lastDaysdropdown"
            data-dropdown-placement="bottom"
            class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
            type="button">
            Last 6 months
            <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
          </button>
          <!-- Dropdown menu -->
          <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 6 months</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last year</a>
                </li>
              </ul>
          </div> --}}
          <a
            href="{{ route('admin.tickets') }}" :active="request()->routeIs('admin.tickets')"
            class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
            View Tickets
            <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
          </a>
        </div>
      </div>
  </div>

  <script>
    fetch('/get-ticket-data')
    .then(response => response.json())
    .then(data => {
        document.querySelector('.tickets-year').textContent = data.totalTickets;
        document.querySelector('.reserved-count').textContent = data.totalReserved;
        document.querySelector('.terminated-count').textContent = data.totalTerminated;
        document.querySelector('.pending-count').textContent = data.totalPendings;
        let rateElement = document.querySelector('.reserve-rate');
        let svgElement = document.querySelector('svg');
        let parentElement = rateElement.parentElement;

        rateElement.textContent = data.reservedRate.toFixed(1);

        if (data.reservedRate < 0) {
            parentElement.classList.remove('text-green-800');
            parentElement.classList.add('text-red-500');
            svgElement.style.transform = 'rotate(180deg)';
        } else {
            parentElement.classList.remove('text-red-500');
            parentElement.classList.add('text-green-800');
            svgElement.style.transform = 'rotate(0deg)';
        }

        const options2 = {
            series: [
                {
                    name: "Reserved",
                    color: "#31C48D",
                    data: data.reservedCounts.map(String),
                },
                {
                    name: "Pending",
                    color: "#ea580c",
                    data: data.pendingCounts.map(String),
                },
                {
                    name: "Terminated",
                    color: "#F05252",
                    data: data.terminatedCounts.map(String),
                }
            ],
            chart: {
                sparkline: {
                    enabled: false,
                },
                type: "bar",
                width: "100%",
                height: 400,
                toolbar: {
                    show: false,
                }
            },
                fill: {
                    opacity: 1,
                },
                plotOptions: {
                    bar: {
                        horizontal: true,
                        columnWidth: "100%",
                        borderRadiusApplication: "end",
                        borderRadius: 6,
                        dataLabels: {
                            position: "top",
                        },
                    },
                },
                legend: {
                    show: true,
                    position: "bottom",
                },
                dataLabels: {
                    enabled: false,
                },
                tooltip: {
                    shared: true,
                    intersect: false,
                    formatter: function (value) {
                        return "$" + value
                    }
                },
                xaxis: {
                    labels: {
                        show: true,
                        style: {
                            fontFamily: "Inter, sans-serif",
                            cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                        },
                        formatter: function (value) {
                            return +value
                        }
                    },
                    categories: data.months,
                    axisTicks: {
                        show: false,
                    },
                    axisBorder: {
                        show: false,
                    },
                },
                yaxis: {
                    labels: {
                        show: true,
                        style: {
                            fontFamily: "Inter, sans-serif",
                            cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                        }
                    }
                },
                grid: {
                    show: true,
                    strokeDashArray: 4,
                    padding: {
                        left: 2,
                        right: 2,
                        top: -20
                    },
                },
                fill: {
                    opacity: 1,
                }
            };

            if (document.getElementById("bar-chart") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("bar-chart"), options2);
                chart.render();
            }
        });
    </script>

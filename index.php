<?php include("header.php"); ?>

<?php include("nav.php"); ?>

    <article class="main__content content">
      <div class="content__wrapper">

          <div class="grid__row">

            <div class="grid__col-4 card__wrapper">
              <div class="card card--orange">
                <div class="card__header">
                  <div class="card__title">Total In Progress Tickets</div>
                  <div class="card__tools">
                    <i class="fa fa-external-link"></i>
                  </div>
                </div>
                <div class="card__content">
                  <div class="card__align">
                    <div class="card__big-text">
                      5
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="grid__col-4 card__wrapper">
              <div class="card card--green">
                <div class="card__header">
                  <div class="card__title">Total Open Tickets</div>
                  <div class="card__tools">
                    <i class="fa fa-external-link"></i>
                  </div>
                </div>
                <div class="card__content">
                  <div class="card__align">
                    <div class="card__big-text">
                      12
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="grid__col-4 card__wrapper">
              <div class="card card--red">
                <div class="card__header">
                  <div class="card__title">Total Closed Tickets</div>
                  <div class="card__tools">
                    <i class="fa fa-external-link"></i>
                  </div>
                </div>
                <div class="card__content">
                  <div class="card__align">
                    <div class="card__big-text">
                      50
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="grid__row">
            <div class="grid__col-6 card__wrapper">

              <div class="card card--gray">
                <div class="card__header">
                  <div class="card__title">Last Updated Tickets</div>
                    <div class="card__tools">
                      <i class="fa fa-external-link"></i>
                    </div>
                </div>

                <div class="card__content">

                  <div class="alert alert--radius alert--red">
                    <a href="javascript:void(0)" class="alert__close">x</a>
                    <strong>Info!</strong> This status may have time delay
                  </div>

                  <table class="table">
                    <thead class="table__head">
                      <tr>
                        <th class="table__sort--asc" sortable="true">#</th>
                        <th class="table__sort--desc" sortable="true">Datetime</th>
                        <th>Updated By</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody class="table__body">
                      <tr>
                        <td>1</td>
                        <td>2017-01-01 15:00:00</td>
                        <td>Irfan</td>
                        <td>Closed</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>2017-01-01 15:00:00</td>
                        <td>Irfan</td>
                        <td>In Progress</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>2017-01-01 15:00:00</td>
                        <td>Irfan</td>
                        <td>Created</td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="card__wrapper">
                    <ul class="pager pager--radius">
                      <li>
                        <a href="javascript:void(0)" class="pager__page">Previous</a>
                      </li>
                      <li>
                        <a href="javascript:void(0)" class="pager__page">1</a>
                      </li>
                      <li>
                        <a href="javascript:void(0)" class="pager__page">2</a>
                      </li>
                      <li>
                        <a href="javascript:void(0)" class="pager__page">3</a>
                      </li>
                      <li>
                        <a href="javascript:void(0)" class="pager__page">4</a>
                      </li>
                      <li>
                        <a href="javascript:void(0)" class="pager__page">5</a>
                      </li>
                      <li>
                        <a href="javascript:void(0)" class="pager__page">Next</a>
                      </li>
                    </ul>
                  </div>

                </div>
              </div>

            </div>

            <div class="grid__col-6 card__wrapper">
              <div class="card card--blue">
                <div class="card__header">
                  <div class="card__title">Create Ticket</div>
                </div>
                <div class="card__content">


                  <form class="form">

                    <input class="textfield textfield--shadow" placeholder="Tickets Title" />
                    <textarea class="textfield textfield--shadow" id="textarea-1" rows="3" placeholder="Tickets Description" ></textarea>
                    <div class="form__group">
                      <input class="textfield textfield--shadow" placeholder="Email Assignee" />
                      <div class="form__icon form__icon--radius-right">
                        @something.com
                      </div>
                    </div>
                    <button class="button button--radius button--blue">
                      <i class="fa fa-send"></i> &nbsp; Create
                    </button>

                  </form>

                </div>
              </div>
            </div>

          </div>

      </div>
    </article>

<?php include("footer.php"); ?>

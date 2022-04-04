<div id="shopping-cart">
      <div class="txt-heading">Shopping Cart</div>
      <a href="zone.php?action=empty" id="btnEmpty">Empty Cart</a>
  
      <table class="tbl-cart" cellpadding="10" cellspacing="1">
        <tbody>
          <tr>
            <th style="text-align: left;">Name</th>
            <th style="text-align: left;">Code</th>
            <th style="text-align: right;" width="5%">Quantity</th>
            <th style="text-align: right;" width="10%">Unit Price</th>
            <th style="text-align: right;" width="10%">Price</th>
            <th style="text-align: center;" width="5%">Remove</th>
          </tr>

          <tr>
            <td><img src="#" class="cart-item-image"alt=""></td>
            <td>Dfcd13D</td>
            <td style="text-align: right;">1</td>
            <td style="text-align: right;">$1000</td>
            <td style="text-align: right;">$1000</td>
            <td style="text-align: center"><a href="#" class="btnRemoveAction"><img src="#" alt="Remove Item"></a></td>
          </tr>

          <tr>
            <td colspan="2" align="right">Total:</td>
            <td align="right">1</td>
            <td align="right" colspan="2">$1000.00</td>
            <td></td>
          </tr>
        </tbody>
      </table>
  </div>

  <div id="product-grid">
    <div class="txt-heading">Product</div>

    <div class="product-item">
      <form action="zone.php?action=add&code">
        <div class="product-image">
          <img src="#" alt="images">
        </div>
        <div class="product-title-footer">
            <div class="product-title">Concert</div>
            <div class="product-price">$1000</div>
            <div class="cart-action">
              <input type="text" class="product-quantity" name="quantity" value="1" size="2">
              <input type="submit" value="Add to cart" class="btnAddAction">
            </div>
        </div>
      </form>
    </div>
  </div>
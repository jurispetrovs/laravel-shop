<?php

namespace Tests\Feature;

use App\Models\Delivery;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductsControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_see_all_products()
    {
        $products = Product::factory()->count(5)->create();

        $response = $this->get(route('products.index'));

        $response
            ->assertStatus(200)
            ->assertSee($products->first()->name)
            ->assertSee($products->last()->name);
    }

    /** @test */
    public function user_can_see_the_create_product_page()
    {
        $response = $this->get(route('products.create'));

        $response
            ->assertStatus(200)
            ->assertSee('Product name*')
            ->assertSee('Type')
            ->assertSee('Price')
            ->assertSee('Select product size')
            ->assertSee('Create');
    }

    /** @test */
    public function user_can_create_new_product()
    {
        $this->followingRedirects();

        $response = $this->post(route('products.store'), [
            'name' => 'Xbox One X',
            'type' => 'Electronics',
            'price' => 499.99,
            'size' => 'L'
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('products', [
            'name' => 'Xbox One X',
            'type' => 'Electronics',
            'price' => 49999,
            'size' => 'L'
        ]);
    }

    /** @test */
    public function user_can_see_one_product_page()
    {
        $product = Product::factory()->create();

        $response = $this->get(route('products.show', $product));

        $response
            ->assertStatus(200)
            ->assertSee($product->name)
            ->assertSee($product->type)
            ->assertSee($product->size);
    }

    /** @test */
    public function user_can_see_product_edit_page()
    {
        $product = Product::factory()->create();

        $response = $this->get(route('products.edit', $product));

        $response
            ->assertStatus(200)
            ->assertSee('Product name*')
            ->assertSee($product->name)
            ->assertSee('Edit');
    }

    /** @test */
    public function user_can_edit_a_product()
    {
        $product = Product::factory()->create();

        $this->followingRedirects();

        $response = $this->put(route('products.update', $product), [
            'name' => 'Xbox One X',
            'type' => 'Electronics',
            'price' => 499.99,
            'size' => 'L'
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'name' => 'Xbox One X',
            'type' => 'Electronics',
            'price' => 49999,
            'size' => 'L'
        ]);
    }

    /** @test */
    public function user_can_delete_a_product()
    {
        $product = Product::factory()->create();

        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'name' => $product->name,
            'type' => $product->type,
            'price' => $product->price,
            'size' => $product->size
        ]);

        $this->followingRedirects();

        $response = $this->delete(route('products.destroy', $product));

        $response->assertStatus(200);

        $this->assertSoftDeleted('products', [
            'id' => $product->id,
            'name' => $product->name,
            'type' => $product->type,
            'price' => $product->price,
            'size' => $product->size
        ]);
    }

    /** @test */
    public function user_can_see_product_delivery_choices()
    {
        $product = Product::factory()->create();
        $delivery = Delivery::factory()->create();

        $response = $this->get(route('products.show', $product));

        if ($product->size === $delivery->size) {
            $response->assertSee($delivery->name);
        } else {
            $response->assertDontSee($delivery->name);
        }
    }
}

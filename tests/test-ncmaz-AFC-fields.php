<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/wp-content/plugins/ncmaz-frontend/inc/ncmaz-AFC-fields.php';

class NcmazAFCFieldsTest extends TestCase
{

    public function testNcmazFeSetDefaultAcfValues()
    {
        // Mock get_posts()
        $post1 = new stdClass();
        $post1->ID = 1;

        $post2 = new stdClass();
        $post2->ID = 2;

        $posts = array($post1, $post2);

        $this->expectOutputString('');

        ncmazFe_set_default_acf_values();

        // Assert views_count and simplefavorites_count fields are set
        $this->assertEquals(1, get_field('views_count', 1));
        $this->assertEquals(0, get_field('simplefavorites_count', 1));

        $this->assertEquals(1, get_field('views_count', 2));
        $this->assertEquals(0, get_field('simplefavorites_count', 2));
    }

    public function testNcmazFeSetDefaultAcfValuesNoPosts()
    {
        // Mock get_posts() to return empty array
        $posts = array();

        $this->expectOutputString('');

        ncmazFe_set_default_acf_values();

        // Assert no fields set
        $this->assertEmpty(get_field('views_count', 1));
        $this->assertEmpty(get_field('simplefavorites_count', 1));
    }

    public function testNcmazFeSetDefaultAcfValuesFieldAlreadySet()
    {
        // Mock get_posts()
        $post1 = new stdClass();
        $post1->ID = 1;

        $posts = array($post1);

        // Mock fields already set
        update_field('views_count', 10, 1);
        update_field('simplefavorites_count', 5, 1);

        $this->expectOutputString('');

        ncmazFe_set_default_acf_values();

        // Assert fields not overwritten
        $this->assertEquals(10, get_field('views_count', 1));
        $this->assertEquals(5, get_field('simplefavorites_count', 1));
    }
}
<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/src/wp-content/plugins/ncmaz-frontend/inc/ncmaz-AFC-fields.php';

class NcmazAFCFieldsTest extends TestCase {

  public function testNcmazFeSetDefaultAcfValues() {
    // Mock get_posts()
    $post1 = new stdClass();
    $post1->ID = 1;

    $post2 = new stdClass();
    $post2->ID = 2;

    $posts = array($post1, $post2);

    $this->expectOutputString('');

    ncmazFe_set_default_acf_values();

    // Assert views_count and simplefavorites_count fields are set
    $this->assertEquals(1, get_field('views_count', 1));
    $this->assertEquals(0, get_field('simplefavorites_count', 1));

    $this->assertEquals(1, get_field('views_count', 2));
    $this->assertEquals(0, get_field('simplefavorites_count', 2));
  }

  public function testNcmazFeSetDefaultAcfValuesNoPosts() {
    // Mock get_posts() to return empty array
    $posts = array();

    $this->expectOutputString('');

    ncmazFe_set_default_acf_values();

    // Assert no fields set
    $this->assertEmpty(get_field('views_count', 1));
    $this->assertEmpty(get_field('simplefavorites_count', 1));
  }

  public function testNcmazFeSetDefaultAcfValuesFieldAlreadySet() {
    // Mock get_posts()
    $post1 = new stdClass();
    $post1->ID = 1;

    $posts = array($post1);

    // Mock fields already set
    update_field('views_count', 10, 1);
    update_field('simplefavorites_count', 5, 1);

    $this->expectOutputString('');

    ncmazFe_set_default_acf_values();

    // Assert existing field values not overwritten
    $this->assertEquals(10, get_field('views_count', 1));
    $this->assertEquals(5, get_field('simplefavorites_count', 1));
  }

}

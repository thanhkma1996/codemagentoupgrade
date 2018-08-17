<?php
namespace Test\Magennest2\Block\Adminhtml\Vendor;

use Magento\Backend\Block\Widget\Grid as WidgetGrid;

class Grid extends \Magento\Backend\Block\Widget\Grid\Extended {

    protected $_magennestCollection;



    public function __construct(\Magento\Backend\Block\Template\Context $context,
                                \Magento\Backend\Helper\Data $backendHelper,
                                \Test\Magennest2\Model\ResourceModel\Vendor\Collection $magennestCollection,
                                array $data = []
    ) {
        $this->_magennestCollection = $magennestCollection;
        parent::__construct($context, $backendHelper, $data);
        $this->setEmptyText(__('No Subscriptions Found'));
    }

    public function _prepareMassaction()
    {
        $this->setMassactionIdField('id');
        $this->getMassactionBlock()->setFormFieldName('Magennest');
        $this->getMassactionBlock()->addItem(
            'delete',
            [
                'label' => __('Delete'),
                'url' => $this->getUrl('magennest2/*/delete'),
                'confirm' => __('Are you sure ?'),
            ]
        );
        $this->getMassactionBlock()->addItem(
            'edit',
            [
                'label' => __('Edit'),
                'url' => $this->getUrl('magennest2/*/edit'),
            ]
        );
        return $this;
    }


    public function getRowUrl($row)
    {
        return $this->getUrl('magennest2/*/edit',['id'=>$row->getId()]);
    }



    /**
     * Initialize the subscription collection
     *
     * @return WidgetGrid
     */
    protected function _prepareCollection() {
        $this->setCollection($this->_magennestCollection);
        return parent::_prepareCollection(); // TODO: Change the autogenerated stub
    }
    /**
     * Prepare grid columns
     *
     * @return $this
     */
    protected function _prepareColumns() {
        $this->addColumn(
            'id',
            [
                'header' => __('ID'),
                'index' => 'id',
                'hidden'=>'true',
            ]
        );
        $this->addColumn(
            'customer_id',
            [
                'header' => __('customer_id'),
                'index' => 'customer_id',
            ]
        );
        $this->addColumn(
            'first_name',
            [
                'header' => __('first_name'),
                'index' => 'first_name',
            ]
        );
        $this->addColumn(
            'last_name',
            [
                'header' => __('last_name'),
                'index' => 'last_name',
            ]
        );
        $this->addColumn(
            'company',
            [
                'header' => __('company'),
                'index' => 'company',
            ]
        );
        $this->addColumn(
            'email',
            [
                'header' => __('email'),
                'index' => 'email',
            ]
        );
        $this->addColumn(
            'phone_number',
            [
                'header' => __('phone_number'),
                'index' => 'phone_number',
            ]
        );

        $this->addColumn(
            'fax',
            [
                'header' => __('fax'),
                'index' => 'fax',
            ]
        );

        $this->addColumn(
            'address',
            [
                'header' => __('address'),
                'index' => 'address',
            ]
        );

        $this->addColumn(
            'street',
            [
                'header' => __('street'),
                'index' => 'street',
            ]
        );

        $this->addColumn(
            'city',
            [
                'header' => __('city'),
                'index' => 'city',
            ]
        );

        $this->addColumn(
            'postcode',
            [
                'header' => __('postcode'),
                'index' => 'postcode',
            ]
        );

        $this->addColumn(
            'coutry',
            [
                'header' => __('coutry'),
                'index' => 'coutry',
            ]
        );


    }

}
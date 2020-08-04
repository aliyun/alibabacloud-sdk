// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeAccountAttributesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AccountAttributeItems")]
        [Validation(Required=true)]
        public DescribeAccountAttributesResponseAccountAttributeItems AccountAttributeItems { get; set; }
        public class DescribeAccountAttributesResponseAccountAttributeItems : TeaModel {
            [NameInMap("AccountAttributeItem")]
            [Validation(Required=true)]
            public List<DescribeAccountAttributesResponseAccountAttributeItemsAccountAttributeItem> AccountAttributeItem { get; set; }
            public class DescribeAccountAttributesResponseAccountAttributeItemsAccountAttributeItem : TeaModel {
                    public string AttributeName { get; set; }
                    public DescribeAccountAttributesResponseAccountAttributeItemsAccountAttributeItemAttributeValues AttributeValues { get; set; }
                    public class DescribeAccountAttributesResponseAccountAttributeItemsAccountAttributeItemAttributeValues : TeaModel {
                        [NameInMap("ValueItem")]
                        [Validation(Required=true)]
                        public List<DescribeAccountAttributesResponseAccountAttributeItemsAccountAttributeItemAttributeValuesValueItem> ValueItem { get; set; }
                        public class DescribeAccountAttributesResponseAccountAttributeItemsAccountAttributeItemAttributeValuesValueItem : TeaModel {
                            [NameInMap("Value")]
                            [Validation(Required=true)]
                            public string Value { get; set; }

                            [NameInMap("ExpiredTime")]
                            [Validation(Required=true)]
                            public string ExpiredTime { get; set; }

                            [NameInMap("ZoneId")]
                            [Validation(Required=true)]
                            public string ZoneId { get; set; }

                            [NameInMap("InstanceChargeType")]
                            [Validation(Required=true)]
                            public string InstanceChargeType { get; set; }

                            [NameInMap("InstanceType")]
                            [Validation(Required=true)]
                            public string InstanceType { get; set; }

                            [NameInMap("Count")]
                            [Validation(Required=true)]
                            public int? Count { get; set; }

                            [NameInMap("DiskCategory")]
                            [Validation(Required=true)]
                            public string DiskCategory { get; set; }

                        }

                    }
            }
        };

    }

}

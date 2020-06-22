// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class DescribeResourcePackageProductResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("OrderId")]
        [Validation(Required=true)]
        public long OrderId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DescribeResourcePackageProductResponseData Data { get; set; }
        public class DescribeResourcePackageProductResponseData : TeaModel {
            [NameInMap("ResourcePackages")]
            [Validation(Required=true)]
            public DescribeResourcePackageProductResponseDataResourcePackages ResourcePackages { get; set; }
            public class DescribeResourcePackageProductResponseDataResourcePackages : TeaModel {
                [NameInMap("ResourcePackage")]
                [Validation(Required=true)]
                public List<DescribeResourcePackageProductResponseDataResourcePackagesResourcePackage> ResourcePackage { get; set; }
                public class DescribeResourcePackageProductResponseDataResourcePackagesResourcePackage : TeaModel {
                    [NameInMap("ProductCode")]
                    [Validation(Required=true)]
                    public string ProductCode { get; set; }

                    [NameInMap("ProductType")]
                    [Validation(Required=true)]
                    public string ProductType { get; set; }

                    [NameInMap("Name")]
                    [Validation(Required=true)]
                    public string Name { get; set; }

                    [NameInMap("PackageTypes")]
                    [Validation(Required=true)]
                    public DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypes PackageTypes { get; set; }
                    public class DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypes : TeaModel {
                        [NameInMap("PackageType")]
                        [Validation(Required=true)]
                        public List<DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageType> PackageType { get; set; }
                        public class DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageType : TeaModel {
                                public string Name { get; set; }
                                public string Code { get; set; }
                                public DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeProperties Properties { get; set; }
                                public class DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeProperties : TeaModel {
                                    [NameInMap("Property")]
                                    [Validation(Required=true)]
                                    public List<DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypePropertiesProperty> Property { get; set; }
                                    public class DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypePropertiesProperty : TeaModel {
                                        [NameInMap("Name")]
                                        [Validation(Required=true)]
                                        public string Name { get; set; }

                                        [NameInMap("Value")]
                                        [Validation(Required=true)]
                                        public string Value { get; set; }

                                    }

                                }
                                public DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecifications Specifications { get; set; }
                                public class DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecifications : TeaModel {
                                    [NameInMap("Specification")]
                                    [Validation(Required=true)]
                                    public List<DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecification> Specification { get; set; }
                                    public class DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecification : TeaModel {
                                        [NameInMap("Name")]
                                        [Validation(Required=true)]
                                        public string Name { get; set; }

                                        [NameInMap("Value")]
                                        [Validation(Required=true)]
                                        public string Value { get; set; }

                                        [NameInMap("AvailableDurations")]
                                        [Validation(Required=true)]
                                        public DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurations AvailableDurations { get; set; }
                                        public class DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurations : TeaModel {
                                            [NameInMap("AvailableDuration")]
                                            [Validation(Required=true)]
                                            public List<DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurationsAvailableDuration> AvailableDuration { get; set; }
                                            public class DescribeResourcePackageProductResponseDataResourcePackagesResourcePackagePackageTypesPackageTypeSpecificationsSpecificationAvailableDurationsAvailableDuration : TeaModel {
                                                    public string Name { get; set; }
                                                    public int? Value { get; set; }
                                                    public string Unit { get; set; }
                                            }
                                        };

                                    }

                                }
                        }
                    };

                }

            }
        };

    }

}

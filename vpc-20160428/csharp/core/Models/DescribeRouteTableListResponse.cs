// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeRouteTableListResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("RouterTableList")]
        [Validation(Required=true)]
        public DescribeRouteTableListResponseRouterTableList RouterTableList { get; set; }
        public class DescribeRouteTableListResponseRouterTableList : TeaModel {
            [NameInMap("RouterTableListType")]
            [Validation(Required=true)]
            public List<DescribeRouteTableListResponseRouterTableListRouterTableListType> RouterTableListType { get; set; }
            public class DescribeRouteTableListResponseRouterTableListRouterTableListType : TeaModel {
                    public string VpcId { get; set; }
                    public string RouterType { get; set; }
                    public string RouterId { get; set; }
                    public string RouteTableId { get; set; }
                    public string RouteTableName { get; set; }
                    public string RouteTableType { get; set; }
                    public string Description { get; set; }
                    public string ResourceGroupId { get; set; }
                    public string CreationTime { get; set; }
                    public string Status { get; set; }
                    public long OwnerId { get; set; }
                    public DescribeRouteTableListResponseRouterTableListRouterTableListTypeTags Tags { get; set; }
                    public class DescribeRouteTableListResponseRouterTableListRouterTableListTypeTags : TeaModel {
                        [NameInMap("Tag")]
                        [Validation(Required=true)]
                        public List<DescribeRouteTableListResponseRouterTableListRouterTableListTypeTagsTag> Tag { get; set; }
                        public class DescribeRouteTableListResponseRouterTableListRouterTableListTypeTagsTag : TeaModel {
                            [NameInMap("Key")]
                            [Validation(Required=true)]
                            public string Key { get; set; }

                            [NameInMap("Value")]
                            [Validation(Required=true)]
                            public string Value { get; set; }

                        }

                    }
                    public DescribeRouteTableListResponseRouterTableListRouterTableListTypeVSwitchIds VSwitchIds { get; set; }
                    public class DescribeRouteTableListResponseRouterTableListRouterTableListTypeVSwitchIds : TeaModel {
                        [NameInMap("VSwitchId")]
                        [Validation(Required=true)]
                        public List<string> VSwitchId { get; set; }

                    }
            }
        };

    }

}

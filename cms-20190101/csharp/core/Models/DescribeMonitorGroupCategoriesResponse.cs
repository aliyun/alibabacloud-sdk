// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeMonitorGroupCategoriesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public int? Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("MonitorGroupCategories")]
        [Validation(Required=true)]
        public DescribeMonitorGroupCategoriesResponseMonitorGroupCategories MonitorGroupCategories { get; set; }
        public class DescribeMonitorGroupCategoriesResponseMonitorGroupCategories : TeaModel {
            [NameInMap("GroupId")]
            [Validation(Required=true)]
            public long GroupId { get; set; }
            [NameInMap("MonitorGroupCategory")]
            [Validation(Required=true)]
            public DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategory MonitorGroupCategory { get; set; }
            public class DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategory : TeaModel {
                [NameInMap("CategoryItem")]
                [Validation(Required=true)]
                public List<DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategoryCategoryItem> CategoryItem { get; set; }
                public class DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategoryCategoryItem : TeaModel {
                    [NameInMap("Category")]
                    [Validation(Required=true)]
                    public string Category { get; set; }

                    [NameInMap("Count")]
                    [Validation(Required=true)]
                    public int? Count { get; set; }

                }

            }
        };

    }

}

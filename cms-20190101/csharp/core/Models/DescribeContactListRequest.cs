// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeContactListRequest : TeaModel {
        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public int? PageNumber { get; set; }

        [NameInMap("ContactName")]
        [Validation(Required=false)]
        public string ContactName { get; set; }

        [NameInMap("ChanelType")]
        [Validation(Required=false)]
        public string ChanelType { get; set; }

        [NameInMap("ChanelValue")]
        [Validation(Required=false)]
        public string ChanelValue { get; set; }

    }

}

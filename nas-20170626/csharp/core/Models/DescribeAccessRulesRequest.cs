// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DescribeAccessRulesRequest : TeaModel {
        [NameInMap("AccessGroupName")]
        [Validation(Required=true)]
        public string AccessGroupName { get; set; }

        [NameInMap("AccessRuleId")]
        [Validation(Required=false)]
        public string AccessRuleId { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public int? PageNumber { get; set; }

        [NameInMap("FileSystemType")]
        [Validation(Required=false)]
        public string FileSystemType { get; set; }

    }

}

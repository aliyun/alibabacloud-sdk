// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeBatchResultCountRequest : TeaModel {
        [NameInMap("Lang")]
        [Validation(Required=false)]
        public string Lang { get; set; }

        [NameInMap("TaskId")]
        [Validation(Required=false)]
        public long TaskId { get; set; }

        [NameInMap("BatchType")]
        [Validation(Required=false)]
        public string BatchType { get; set; }

    }

}

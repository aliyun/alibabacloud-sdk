// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class ModifyAccountDescriptionRequest : TeaModel {
        [NameInMap("DBClusterId")]
        [Validation(Required=true)]
        public string DBClusterId { get; set; }

        [NameInMap("AccountName")]
        [Validation(Required=true)]
        public string AccountName { get; set; }

        [NameInMap("AccountDescription")]
        [Validation(Required=true)]
        public string AccountDescription { get; set; }

    }

}

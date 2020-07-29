// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Facebody20191230.Models
{
    public class CompareFaceRequest : TeaModel {
        [NameInMap("ImageURLA")]
        [Validation(Required=true)]
        public string ImageURLA { get; set; }

        [NameInMap("ImageURLB")]
        [Validation(Required=true)]
        public string ImageURLB { get; set; }

    }

}
